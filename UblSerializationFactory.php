<?php

declare(strict_types=1);

namespace ECSSolutions\UblToolset;

use JMS\Serializer\AbstractVisitor;
use JMS\Serializer\Exception\NotAcceptableException;
use JMS\Serializer\Exception\RuntimeException;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use JMS\Serializer\Metadata\ClassMetadata;
use JMS\Serializer\Metadata\PropertyMetadata;
use JMS\Serializer\Visitor\Factory\SerializationVisitorFactory;
use JMS\Serializer\Visitor\SerializationVisitorInterface;
use JMS\Serializer\Context;
use JMS\Serializer\GraphNavigator;
use JMS\Serializer\XmlDeserializationVisitor;

/**
 * Modiefied viewer/factory/parser for UBL files
 */
class UblSerializationFactory extends AbstractVisitor implements SerializationVisitorInterface, SerializationVisitorFactory, SubscribingHandlerInterface
{
    
    /**
     * @var \DOMDocument
     */
    private $document;

    /**
     * @var string
     */
    private $defaultRootName = 'result';

    /**
     * @var string|null
     */
    private $defaultRootNamespace;

    /**
     * @var string|null
     */
    private $defaultRootPrefix;

    /**
     * @var \SplStack
     */
    private $stack;

    /**
     * @var \SplStack
     */
    private $metadataStack;

    /**
     * @var \DOMNode|\DOMElement|null
     */
    private $currentNode;

    /**
     * @var ClassMetadata|PropertyMetadata|null
     */
    private $currentMetadata;

    /**
     * @var bool
     */
    private $hasValue;

    /**
     * @var bool
     */
    private $nullWasVisited;

    /**
     * @var \SplStack
     */
    private $objectMetadataStack;

    /**
     * @var string
     */
    private $defaultVersion = '1.0';

    /**
     * @var string
     */
    private $defaultEncoding = 'UTF-8';

    /**
     * @var bool
     */
    private $formatOutput = true;

    /**
     * @var string
     */
    private $defaultTimezone = 'UTC';

    /**
     * @var array
     */
    private $namespaces = array();

    public function __construct($namespaces = array(), $defaultTimezone = 'UTC')
    {
        $this->namespaces = $namespaces;
        $this->defaultTimezone = new \DateTimeZone($defaultTimezone);
    }

    public function getVisitor(): SerializationVisitorInterface
    {
        return $this->createVisitor(
            $this->formatOutput,
            $this->defaultEncoding,
            $this->defaultVersion,
            $this->defaultRootName,
            $this->defaultRootNamespace,
        );
    }

    public function setDefaultRootName(string $name, ?string $namespace = null): self
    {
        $this->defaultRootName = $name;
        $this->defaultRootNamespace = $namespace;

        return $this;
    }

    public function setDefaultVersion(string $version): self
    {
        $this->defaultVersion = $version;

        return $this;
    }

    public function setDefaultEncoding(string $encoding): self
    {
        $this->defaultEncoding = $encoding;

        return $this;
    }

    public function setFormatOutput(bool $formatOutput): self
    {
        $this->formatOutput = (bool) $formatOutput;

        return $this;
    }

    public function createVisitor(
        bool $formatOutput = true,
        string $defaultEncoding = 'UTF-8',
        string $defaultVersion = '1.0',
        string $defaultRootName = 'result',
        ?string $defaultRootNamespace = null,
        ?string $defaultRootPrefix = null
    ): SerializationVisitorInterface {
        $this->objectMetadataStack = new \SplStack();
        $this->stack = new \SplStack();
        $this->metadataStack = new \SplStack();

        $this->currentNode = null;
        $this->nullWasVisited = false;

        $this->document = $this->createDocument($formatOutput, $defaultVersion, $defaultEncoding);

        $this->defaultRootName = $defaultRootName;
        $this->defaultRootNamespace = $defaultRootNamespace;
        $this->defaultRootPrefix = $defaultRootPrefix;

        return $this;
    }

    private function createDocument(bool $formatOutput, string $defaultVersion, string $defaultEncoding): \DOMDocument
    {
        $document = new \DOMDocument($defaultVersion, $defaultEncoding);
        $document->formatOutput = $formatOutput;

        return $document;
    }

    public function createRoot(?ClassMetadata $metadata = null, ?string $rootName = null, ?string $rootNamespace = null, ?string $rootPrefix = null): \DOMElement
    {
        if (null !== $metadata && !empty($metadata->xmlRootName)) {
            $rootPrefix = $metadata->xmlRootPrefix;
            $rootName = $metadata->xmlRootName;
            $rootNamespace = $metadata->xmlRootNamespace ?: $this->getClassDefaultNamespace($metadata);
        } else {
            $rootName = $rootName ?: $this->defaultRootName;
            $rootNamespace = $rootNamespace ?: $this->defaultRootNamespace;
            $rootPrefix = $rootPrefix ?: $this->defaultRootPrefix;
        }

        $document = $this->getDocument();
        if ($rootNamespace) {
            $rootNode = $document->createElementNS($rootNamespace, (null !== $rootPrefix ? $rootPrefix . ':' : '') . $rootName);
        } else {
            $rootNode = $document->createElement($rootName);
        }

        $document->appendChild($rootNode);
        $this->setCurrentNode($rootNode);

        return $rootNode;
    }

    /**
     * {@inheritdoc}
     */
    public function visitNull($data, array $type)
    {
        $node = $this->document->createAttribute('xsi:nil');
        $node->value = 'true';
        $this->nullWasVisited = true;

        return $node;
    }

    /**
     * {@inheritdoc}
     */
    public function visitString(string $data, array $type)
    {
        $doCData = preg_match('/[<>&\'"]/', (string) $data);

        return $doCData ? $this->document->createCDATASection($data) : $this->document->createTextNode((string) $data);
    }

    /**
     * @param mixed $data
     * @param TypeArray $type
     */
    public function visitSimpleString($data, array $type): \DOMText
    {
        return $this->document->createTextNode((string) $data);
    }

    /**
     * {@inheritdoc}
     */
    public function visitBoolean(bool $data, array $type)
    {
        return $this->document->createTextNode($data ? 'true' : 'false');
    }

    /**
     * {@inheritdoc}
     */
    public function visitInteger(int $data, array $type)
    {
        return $this->document->createTextNode((string) $data);
    }

    /**
     * {@inheritdoc}
     */
    public function visitDouble(float $data, array $type)
    {
        $dataResult = $data;
        $precision = $type['params'][0] ?? null;
        if (is_int($precision)) {
            $roundMode = $type['params'][1] ?? null;
            $roundMode = $this->mapRoundMode($roundMode);
            $dataResult = round($dataResult, $precision, $roundMode);
        }

        $decimalsNumbers = $type['params'][2] ?? null;
        if (null === $decimalsNumbers) {
            $parts = explode('.', (string) $dataResult);
            if (count($parts) < 2 || !$parts[1]) {
                $decimalsNumbers = 1;
            }
        }

        if (null !== $decimalsNumbers) {
            $dataResult = number_format($dataResult, $decimalsNumbers, '.', '');
        }

        return $this->document->createTextNode((string) $dataResult);
    }

    /**
     * {@inheritdoc}
     */
    public function visitArray(array $data, array $type): void
    {
        if (null === $this->currentNode) {
            $this->createRoot();
        }

        $entryName = null !== $this->currentMetadata && null !== $this->currentMetadata->xmlEntryName ? $this->currentMetadata->xmlEntryName : 'entry';
        $keyAttributeName = null !== $this->currentMetadata && null !== $this->currentMetadata->xmlKeyAttribute ? $this->currentMetadata->xmlKeyAttribute : null;
        $namespace = null !== $this->currentMetadata && null !== $this->currentMetadata->xmlEntryNamespace ? $this->currentMetadata->xmlEntryNamespace : null;

        $elType = $this->getElementType($type);
        foreach ($data as $k => $v) {
            $tagName = null !== $this->currentMetadata && $this->currentMetadata->xmlKeyValuePairs && $this->isElementNameValid((string) $k) ? $k : $entryName;

            $entryNode = $this->createElement($tagName, $namespace);
            $this->currentNode->appendChild($entryNode);
            $this->setCurrentNode($entryNode);

            if (null !== $keyAttributeName) {
                $entryNode->setAttribute($keyAttributeName, (string) $k);
            }

            try {
                if (null !== $node = $this->navigator->accept($v, $elType)) {
                    $this->currentNode->appendChild($node);
                }
            } catch (NotAcceptableException $e) {
                $this->currentNode->parentNode->removeChild($this->currentNode);
            }

            $this->revertCurrentNode();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function startVisitingObject(ClassMetadata $metadata, object $data, array $type): void
    {
        $this->objectMetadataStack->push($metadata);

        if (null === $this->currentNode) {
            $this->createRoot($metadata);
        }

        $this->addNamespaceAttributes($metadata, $this->currentNode);

        $this->hasValue = false;
    }

    /**
     * {@inheritdoc}
     */
    public function visitProperty(PropertyMetadata $metadata, $v): void
    {
        if ($metadata->xmlAttribute) {
            $this->setCurrentMetadata($metadata);
            $node = $this->navigator->accept($v, $metadata->type);
            $this->revertCurrentMetadata();

            if (!$node instanceof \DOMCharacterData) {
                throw new RuntimeException(sprintf('Unsupported value for XML attribute for %s. Expected character data, but got %s.', $metadata->name, json_encode($v)));
            }

            $this->setAttributeOnNode($this->currentNode, $metadata->serializedName, $node->nodeValue, $metadata->xmlNamespace);

            return;
        }

        if (
            ($metadata->xmlValue && $this->currentNode->childNodes->length > 0)
            || (!$metadata->xmlValue && $this->hasValue)
        ) {
            throw new RuntimeException(sprintf('If you make use of @XmlValue, all other properties in the class must have the @XmlAttribute annotation. Invalid usage detected in class %s.', $metadata->class));
        }

        if ($metadata->xmlValue) {
            $this->hasValue = true;

            $this->setCurrentMetadata($metadata);
            $node = $this->navigator->accept($v, $metadata->type);
            $this->revertCurrentMetadata();

            if (!$node instanceof \DOMCharacterData) {
                throw new RuntimeException(sprintf('Unsupported value for property %s::$%s. Expected character data, but got %s.', $metadata->class, $metadata->name, \is_object($node) ? \get_class($node) : \gettype($node)));
            }

            $this->currentNode->appendChild($node);

            return;
        }

        if ($metadata->xmlAttributeMap) {
            if (!\is_array($v)) {
                throw new RuntimeException(sprintf('Unsupported value type for XML attribute map. Expected array but got %s.', \gettype($v)));
            }

            foreach ($v as $key => $value) {
                $this->setCurrentMetadata($metadata);
                $node = $this->navigator->accept($value, null);
                $this->revertCurrentMetadata();

                if (!$node instanceof \DOMCharacterData) {
                    throw new RuntimeException(sprintf('Unsupported value for a XML attribute map value. Expected character data, but got %s.', json_encode($v)));
                }

                $this->setAttributeOnNode($this->currentNode, $key, $node->nodeValue, $metadata->xmlNamespace);
            }

            return;
        }

        if (false !== strpos($metadata->serializedName, '/@') && $this->trySerializePropertyAsAttributeOnSiblingElement($metadata, $v)) {
            return;
        }

        if (0 === strpos($metadata->serializedName, '@')) {
            [$attributeValue, $processedNode] = $this->processValueForXmlAttribute($v, $metadata->type, $metadata);

            if (null === $v && null === $processedNode) {
                return;
            }

            $attributeName = substr($metadata->serializedName, 1);

            if ($this->currentNode instanceof \DOMElement) {
                $this->setAttributeOnNode($this->currentNode, $attributeName, $attributeValue, $metadata->xmlNamespace);
            } else {
                throw new RuntimeException('Cannot set attribute on a non-element node.');
            }

            return;
        }

        if ($addEnclosingElement = !$this->isInLineCollection($metadata) && !$metadata->inline) {
            $namespace = $metadata->xmlNamespace ?? $this->getClassDefaultNamespace($this->objectMetadataStack->top());

            $element = $this->createElement($metadata->serializedName, $namespace);
            $this->currentNode->appendChild($element);
            $this->setCurrentNode($element);
        }

        $this->setCurrentMetadata($metadata);

        try {
            if (null !== $node = $this->navigator->accept($v, $metadata->type)) {
                $this->currentNode->appendChild($node);
            }
        } catch (NotAcceptableException $e) {
            $this->currentNode->parentNode->removeChild($this->currentNode);
            $this->revertCurrentMetadata();
            $this->revertCurrentNode();
            $this->hasValue = false;

            return;
        }

        $this->revertCurrentMetadata();

        if ($addEnclosingElement) {
            $this->revertCurrentNode();

            if ($this->isElementEmpty($element) && (null === $v || $this->isSkippableCollection($metadata) || $this->isSkippableEmptyObject($node, $metadata))) {
                $this->currentNode->removeChild($element);
            }
        }

        $this->hasValue = false;
    }

    private function trySerializePropertyAsAttributeOnSiblingElement(PropertyMetadata $metadata, $v): bool
    {
        [$elementName, $attributeName] = explode('/@', $metadata->serializedName, 2);
        $namespace = $metadata->xmlNamespace ?? $this->getClassDefaultNamespace($this->objectMetadataStack->top());
        $targetElement = null;

        if ($this->currentNode instanceof \DOMElement) {
            foreach ($this->currentNode->childNodes as $childNode) {
                if ($childNode instanceof \DOMElement && $childNode->localName === $elementName) {
                    $isNamespaceMatch = false;
                    // Case 1: Expected a specific namespace, and child node has it.
                    // Case 2 (else): Expected no namespace
                    if (null !== $namespace && $childNode->namespaceURI === $namespace) {
                        $isNamespaceMatch = true;
                    } elseif ((null === $namespace || '' === $namespace) && (null === $childNode->namespaceURI || '' === $childNode->namespaceURI)) {
                        $isNamespaceMatch = true;
                    }

                    if ($isNamespaceMatch) {
                        $targetElement = $childNode;
                        break;
                    }
                }
            }
        }

        if (!$targetElement) {
            return false;
        }

        if (null === $v) {
            return true;
        }

        [$attributeStringValue, $attributeValueNode] = $this->processValueForXmlAttribute($v, $metadata->type, $metadata);

        if (null !== $attributeValueNode || is_scalar($v)) {
            $this->setAttributeOnNode($targetElement, $attributeName, $attributeStringValue, $metadata->xmlNamespace);
        }

        return true;
    }

    /**
     * @return array{0:string, 1:\DOMNode|null} string value for attribute, and the processed DOMNode/null.
     *
     * @throws RuntimeException If the value is unsuitable for an XML attribute.
     */
    private function processValueForXmlAttribute($inputValue, ?array $valueType, PropertyMetadata $metadataForNavigatorContext): array
    {
        $this->setCurrentMetadata($metadataForNavigatorContext);
        $processedNode = $this->navigator->accept($inputValue, $valueType);
        $this->revertCurrentMetadata();

        if ($processedNode instanceof \DOMCharacterData) {
            $stringValue = $processedNode->nodeValue;
        } elseif (null === $processedNode) {
            $stringValue = is_scalar($inputValue) ? (string) $inputValue : '';
        } else {
            throw new RuntimeException(sprintf(
                'Unsupported value for XML attribute for property "%s". Expected character data or scalar, but got %s.',
                $metadataForNavigatorContext->name,
                \is_object($processedNode) ? \get_class($processedNode) : \gettype($processedNode),
            ));
        }

        return [$stringValue, $processedNode];
    }

    private function isInLineCollection(PropertyMetadata $metadata): bool
    {
        return $metadata->xmlCollection && $metadata->xmlCollectionInline;
    }

    private function isSkippableEmptyObject(?\DOMElement $node, PropertyMetadata $metadata): bool
    {
        return null === $node && !$metadata->xmlCollection && $metadata->skipWhenEmpty;
    }

    private function isSkippableCollection(PropertyMetadata $metadata): bool
    {
        return $metadata->xmlCollection && $metadata->xmlCollectionSkipWhenEmpty;
    }

    private function isElementEmpty(\DOMElement $element): bool
    {
        return !$element->hasChildNodes() && !$element->hasAttributes();
    }

    public function endVisitingObject(ClassMetadata $metadata, object $data, array $type): void
    {
        $this->objectMetadataStack->pop();
    }

    /**
     * {@inheritdoc}
     */
    public function getResult($node)
    {
        $this->navigator = null;
        if (null === $this->document->documentElement) {
            if ($node instanceof \DOMElement) {
                $this->document->appendChild($node);
            } else {
                $this->createRoot();
                if ($node) {
                    $this->document->documentElement->appendChild($node);
                }
            }
        }

        if ($this->nullWasVisited) {
            $this->document->documentElement->setAttributeNS(
                'http://www.w3.org/2000/xmlns/',
                'xmlns:xsi',
                'http://www.w3.org/2001/XMLSchema-instance',
            );
        }

        return $this->document->saveXML();
    }

    public function getCurrentNode(): ?\DOMNode
    {
        return $this->currentNode;
    }

    public function getCurrentMetadata(): ?PropertyMetadata
    {
        return $this->currentMetadata;
    }

    public function getDocument(): \DOMDocument
    {
        return $this->document;
    }

    public function setCurrentMetadata(PropertyMetadata $metadata): void
    {
        $this->metadataStack->push($this->currentMetadata);
        $this->currentMetadata = $metadata;
    }

    public function setCurrentNode(\DOMNode $node): void
    {
        $this->stack->push($this->currentNode);
        $this->currentNode = $node;
    }

    public function setCurrentAndRootNode(\DOMNode $node): void
    {
        $this->setCurrentNode($node);
        $this->document->appendChild($node);
    }

    public function revertCurrentNode(): ?\DOMNode
    {
        return $this->currentNode = $this->stack->pop();
    }

    public function revertCurrentMetadata(): ?PropertyMetadata
    {
        return $this->currentMetadata = $this->metadataStack->pop();
    }

    /**
     * {@inheritdoc}
     */
    public function prepare($data)
    {
        $this->nullWasVisited = false;

        return $data;
    }

    /**
     * Checks that the name is a valid XML element name.
     */
    private function isElementNameValid(string $name): bool
    {
        return $name && false === strpos($name, ' ') && preg_match('#^[\pL_][\pL0-9._-]*$#ui', $name);
    }

    /**
     * Adds namespace attributes to the XML root element
     */
    private function addNamespaceAttributes(ClassMetadata $metadata, \DOMElement $element): void
    {
        foreach ($metadata->xmlNamespaces as $prefix => $uri) {
            $attribute = 'xmlns';
            if ('' !== $prefix) {
                $attribute .= ':' . $prefix;
            } elseif ($element->namespaceURI === $uri) {
                continue;
            }

            $element->setAttributeNS('http://www.w3.org/2000/xmlns/', $attribute, $uri);
        }
    }

    private function createElement(string $tagName, ?string $namespace = null): \DOMElement
    {
        // See #1087 - element must be like: <element xmlns="" /> - https://www.w3.org/TR/REC-xml-names/#iri-use
        // Use of an empty string in a namespace declaration turns it into an "undeclaration".
        if ('' === $namespace) {
            // If we have a default namespace, we need to create namespaced.
            if ($this->parentHasNonEmptyDefaultNs()) {
                return $this->document->createElementNS($namespace, $tagName);
            }

            return $this->document->createElement($tagName);
        }

        if (null === $namespace) {
            return $this->document->createElement($tagName);
        }

        if ($this->currentNode->isDefaultNamespace($namespace)) {
            return $this->document->createElementNS($namespace, $tagName);
        }

        if(array_key_exists($namespace, $this->namespaces)){
            $this->document->documentElement->setAttributeNS('http://www.w3.org/2000/xmlns/', 'xmlns:'.$this->namespaces[$namespace], $namespace);
        }

        if (!($prefix = $this->currentNode->lookupPrefix($namespace)) && !($prefix = $this->document->lookupPrefix($namespace))) {
            $prefix = 'ns-' . substr(sha1($namespace), 0, 8);
        }

        return $this->document->createElementNS($namespace, $prefix . ':' . $tagName);
    }

    private function setAttributeOnNode(\DOMElement $node, string $name, string $value, ?string $namespace = null): void
    {
        if (null !== $namespace) {
            if (!$prefix = $node->lookupPrefix($namespace)) {
                $prefix = 'ns-' . substr(sha1($namespace), 0, 8);
            }

            $node->setAttributeNS($namespace, $prefix . ':' . $name, $value);
        } else {
            $node->setAttribute($name, $value);
        }
    }

    private function getClassDefaultNamespace(ClassMetadata $metadata): ?string
    {
        return $metadata->xmlNamespaces[''] ?? null;
    }

    private function parentHasNonEmptyDefaultNs(): bool
    {
        return null !== ($uri = $this->currentNode->lookupNamespaceUri(null)) && ('' !== $uri);
    }

    /**
     * @return array
     */
    public static function getSubscribingMethods()
    {
        return array(
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'xml',
                'type' => 'GoetasWebservices\Xsd\XsdToPhp\Jms\SimpleListOf',
                'method' => 'simpleListOfToXml'
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'GoetasWebservices\Xsd\XsdToPhp\Jms\SimpleListOf',
                'method' => 'simpleListOfFromXML'
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'xml',
                'type' => 'GoetasWebservices\Xsd\XsdToPhp\Jms\Base64Encoded',
                'method' => 'base64EncodedToXml'
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'GoetasWebservices\Xsd\XsdToPhp\Jms\Base64Encoded',
                'method' => 'base64EncodedFromXml'
            ),
             array(
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date',
                'method' => 'deserializeDate'
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'xml',
                'type' => 'GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Date',
                'method' => 'serializeDate'
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'GoetasWebservices\Xsd\XsdToPhp\XMLSchema\DateTime',
                'method' => 'deserializeDateTime'
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'xml',
                'type' => 'GoetasWebservices\Xsd\XsdToPhp\XMLSchema\DateTime',
                'method' => 'serializeDateTime'
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'type' => 'GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time',
                'method' => 'deserializeTime'
            ),
            array(
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'xml',
                'type' => 'GoetasWebservices\Xsd\XsdToPhp\XMLSchema\Time',
                'method' => 'serializeTime'
            ),
            array(
                'type' => 'DateInterval',
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'xml',
                'method' => 'deserializeDateIntervalXml',
            )
        );
    }
    public function base64EncodedToXml(UblSerializationFactory $visitor, $data, array $type, Context $context)
    {
        return $visitor->visitSimpleString(base64_encode($data), $type, $context);
    }

    public function base64EncodedFromXml(UblSerializationFactory $visitor, $data, array $type)
    {
        $attributes = $data->attributes('xsi', true);
        if (isset($attributes['nil'][0]) && (string)$attributes['nil'][0] === 'true') {
            return null;
        }

        return base64_decode((string)$data);
    }

    public function simpleListOfToXml(UblSerializationFactory $visitor, $object, array $type, Context $context)
    {

        $newType = array(
            'name' => $type["params"][0]["name"],
            'params' => array()
        );

        $navigator = $context->getNavigator();
        $ret = array();
        foreach ($object as $v) {
            $ret[] = $navigator->accept($v, $newType, $context)->data;
        }

        return $visitor->getDocument()->createTextNode(implode(" ", $ret));
    }

    public function simpleListOfFromXml(UblSerializationFactory $visitor, $node, array $type, Context $context)
    {
        $newType = array(
            'name' => $type["params"][0]["name"],
            'params' => array()
        );
        $ret = array();
        $navigator = $context->getNavigator();
        foreach (explode(" ", (string)$node) as $v) {
            $ret[] = $navigator->accept($v, $newType, $context);
        }
        return $ret;
    }

    public function deserializeDateIntervalXml(XmlDeserializationVisitor $visitor, $data, array $type){
        $attributes = $data->attributes('xsi', true);
        if (isset($attributes['nil'][0]) && (string) $attributes['nil'][0] === 'true') {
            return null;
        }
        return $this->createDateInterval((string)$data);
    }

    public function serializeDate(UblSerializationFactory $visitor, \DateTime $date, array $type, Context $context)
    {

        $v = $date->format('Y-m-d');

        return $visitor->visitSimpleString($v, $type, $context);
    }

    public function deserializeDate(XmlDeserializationVisitor $visitor, $data, array $type)
    {
        $attributes = $data->attributes('xsi', true);
        if (isset($attributes['nil'][0]) && (string)$attributes['nil'][0] === 'true') {
            return null;
        }
        if (!preg_match('/^(\d{4})-(\d{2})-(\d{2})(Z|([+-]\d{2}:\d{2}))?$/', (string) $data)) {
            throw new RuntimeException(sprintf('Invalid date "%s", expected valid XML Schema date string.', $data));
        }

        return $this->parseDateTime($data, $type);
    }

    public function serializeDateTime(UblSerializationFactory $visitor, \DateTime $date, array $type, Context $context)
    {

        $v = $date->format(\DateTime::W3C);

        return $visitor->visitSimpleString($v, $type, $context);
    }

    public function deserializeDateTime(XmlDeserializationVisitor $visitor, $data, array $type)
    {
        $attributes = $data->attributes('xsi', true);
        if (isset($attributes['nil'][0]) && (string)$attributes['nil'][0] === 'true') {
            return null;
        }

        return $this->parseDateTime($data, $type);

    }

    public function serializeTime(UblSerializationFactory $visitor, \DateTime $date, array $type, Context $context)
    {
        $v = $date->format('H:i:s');
        if ($date->getTimezone()->getOffset($date) !== $this->defaultTimezone->getOffset($date)) {
            $v .= $date->format('P');
        }
        return $visitor->visitSimpleString($v, $type, $context);
    }

    public function deserializeTime(XmlDeserializationVisitor $visitor, $data, array $type)
    {
        $attributes = $data->attributes('xsi', true);
        if (isset($attributes['nil'][0]) && (string)$attributes['nil'][0] === 'true') {
            return null;
        }

        $data = (string)$data;

        return new \DateTime($data, $this->defaultTimezone);
    }

    private function parseDateTime($data, array $type)
    {
        $timezone = isset($type['params'][1]) ? new \DateTimeZone($type['params'][1]) : $this->defaultTimezone;
        $datetime = new \DateTime((string)$data, $timezone);
        if (false === $datetime) {
            throw new RuntimeException(sprintf('Invalid datetime "%s", expected valid XML Schema dateTime string.', $data));
        }

        return $datetime;
    }

    private function createDateInterval($interval){
        $f = 0.0;
        if (preg_match('~\.\d+~',$interval,$match)) {
            $interval = str_replace($match[0], "", $interval);
            $f = (float)$match[0];
        }
        $di = new \DateInterval($interval);
        // milliseconds are only available from >=7.1
        if(isset($di->f)){
            $di->f= $f;
        }

        return $di;
    }
}