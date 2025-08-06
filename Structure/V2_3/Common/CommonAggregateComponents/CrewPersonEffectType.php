<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing CrewPersonEffectType
 *
 * ABIE
 *  Crew Person Effect. Details
 *  A class describing the effect or belonging of a Crew Person
 *  Crew Person Effect
 * XSD Type: CrewPersonEffectType
 */
class CrewPersonEffectType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Crew Person Effect. Effect Description. Text
     *  The description of the crew effect.
     *  1..n
     *  Crew Person Effect
     *  Effect Description
     *  Text
     *  Text. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EffectDescription[] $effectDescription
     */
    private $effectDescription = [
        
    ];

    /**
     * ASBIE
     *  Crew Person Effect. Crew_ Person. Person
     *  The crew person to whom the effect belongs.
     *  0..1
     *  Crew Person Effect
     *  Crew
     *  Person
     *  Person
     *  Person
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CrewPerson $crewPerson
     */
    private $crewPerson = null;

    /**
     * Adds as uBLExtension
     *
     * A container for extensions foreign to the document.
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension $uBLExtension
     */
    public function addToUBLExtensions(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension $uBLExtension)
    {
        $this->uBLExtensions[] = $uBLExtension;
        return $this;
    }

    /**
     * isset uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetUBLExtensions($index)
    {
        return isset($this->uBLExtensions[$index]);
    }

    /**
     * unset uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetUBLExtensions($index)
    {
        unset($this->uBLExtensions[$index]);
    }

    /**
     * Gets as uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[]
     */
    public function getUBLExtensions()
    {
        return $this->uBLExtensions;
    }

    /**
     * Sets a new uBLExtensions
     *
     * A container for extensions foreign to the document.
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     * @return self
     */
    public function setUBLExtensions(?array $uBLExtensions = null)
    {
        $this->uBLExtensions = $uBLExtensions;
        return $this;
    }

    /**
     * Adds as effectDescription
     *
     * BBIE
     *  Crew Person Effect. Effect Description. Text
     *  The description of the crew effect.
     *  1..n
     *  Crew Person Effect
     *  Effect Description
     *  Text
     *  Text. Type
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EffectDescription $effectDescription
     */
    public function addToEffectDescription(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EffectDescription $effectDescription)
    {
        $this->effectDescription[] = $effectDescription;
        return $this;
    }

    /**
     * isset effectDescription
     *
     * BBIE
     *  Crew Person Effect. Effect Description. Text
     *  The description of the crew effect.
     *  1..n
     *  Crew Person Effect
     *  Effect Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return bool
     */
    public function issetEffectDescription($index)
    {
        return isset($this->effectDescription[$index]);
    }

    /**
     * unset effectDescription
     *
     * BBIE
     *  Crew Person Effect. Effect Description. Text
     *  The description of the crew effect.
     *  1..n
     *  Crew Person Effect
     *  Effect Description
     *  Text
     *  Text. Type
     *
     * @param int|string $index
     * @return void
     */
    public function unsetEffectDescription($index)
    {
        unset($this->effectDescription[$index]);
    }

    /**
     * Gets as effectDescription
     *
     * BBIE
     *  Crew Person Effect. Effect Description. Text
     *  The description of the crew effect.
     *  1..n
     *  Crew Person Effect
     *  Effect Description
     *  Text
     *  Text. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EffectDescription[]
     */
    public function getEffectDescription()
    {
        return $this->effectDescription;
    }

    /**
     * Sets a new effectDescription
     *
     * BBIE
     *  Crew Person Effect. Effect Description. Text
     *  The description of the crew effect.
     *  1..n
     *  Crew Person Effect
     *  Effect Description
     *  Text
     *  Text. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\EffectDescription[] $effectDescription
     * @return self
     */
    public function setEffectDescription(array $effectDescription)
    {
        $this->effectDescription = $effectDescription;
        return $this;
    }

    /**
     * Gets as crewPerson
     *
     * ASBIE
     *  Crew Person Effect. Crew_ Person. Person
     *  The crew person to whom the effect belongs.
     *  0..1
     *  Crew Person Effect
     *  Crew
     *  Person
     *  Person
     *  Person
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CrewPerson
     */
    public function getCrewPerson()
    {
        return $this->crewPerson;
    }

    /**
     * Sets a new crewPerson
     *
     * ASBIE
     *  Crew Person Effect. Crew_ Person. Person
     *  The crew person to whom the effect belongs.
     *  0..1
     *  Crew Person Effect
     *  Crew
     *  Person
     *  Person
     *  Person
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CrewPerson $crewPerson
     * @return self
     */
    public function setCrewPerson(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\CrewPerson $crewPerson = null)
    {
        $this->crewPerson = $crewPerson;
        return $this;
    }
}

