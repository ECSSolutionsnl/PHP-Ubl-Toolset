<?php

namespace ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents;

/**
 * Class representing TenderRequirementType
 *
 * ABIE
 *  Tender Requirement. Details
 *  A template for a required document in a tendering process.
 *  Tender Requirement
 * XSD Type: TenderRequirementType
 */
class TenderRequirementType
{
    /**
     * BBIE
     *  Tender Requirement. Name
     *  A name of this tender requirement.
     *  1
     *  Tender Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name
     */
    private $name = null;

    /**
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[] $description
     */
    private $description = [
        
    ];

    /**
     * ASBIE
     *  Tender Requirement. Template_ Document Reference. Document Reference
     *  A reference to the template for a required document.
     *  0..1
     *  Tender Requirement
     *  Template
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TemplateDocumentReference $templateDocumentReference
     */
    private $templateDocumentReference = null;

    /**
     * Gets as name
     *
     * BBIE
     *  Tender Requirement. Name
     *  A name of this tender requirement.
     *  1
     *  Tender Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * BBIE
     *  Tender Requirement. Name
     *  A name of this tender requirement.
     *  1
     *  Tender Requirement
     *  Name
     *  Name
     *  Name. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name
     * @return self
     */
    public function setName(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Name $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Adds as description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description $description
     */
    public function addToDescription(\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description $description)
    {
        $this->description[] = $description;
        return $this;
    }

    /**
     * isset description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * BBIE
     *  Tender Requirement. Description. Text
     *  Text describing this tender requirement.
     *  0..n
     *  Tender Requirement
     *  Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonBasicComponents\Description[] $description
     * @return self
     */
    public function setDescription(?array $description = null)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Gets as templateDocumentReference
     *
     * ASBIE
     *  Tender Requirement. Template_ Document Reference. Document Reference
     *  A reference to the template for a required document.
     *  0..1
     *  Tender Requirement
     *  Template
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TemplateDocumentReference
     */
    public function getTemplateDocumentReference()
    {
        return $this->templateDocumentReference;
    }

    /**
     * Sets a new templateDocumentReference
     *
     * ASBIE
     *  Tender Requirement. Template_ Document Reference. Document Reference
     *  A reference to the template for a required document.
     *  0..1
     *  Tender Requirement
     *  Template
     *  Document Reference
     *  Document Reference
     *  Document Reference
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TemplateDocumentReference $templateDocumentReference
     * @return self
     */
    public function setTemplateDocumentReference(?\ECSSolutions\UblToolset\Structure\V2_1\Common\CommonAggregateComponents\TemplateDocumentReference $templateDocumentReference = null)
    {
        $this->templateDocumentReference = $templateDocumentReference;
        return $this;
    }
}

