<?php

namespace ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents;

/**
 * Class representing NotificationRequirementType
 *
 * ABIE
 *  Notification Requirement. Details
 *  A class to describe a notification requirement.
 *  Notification Requirement
 * XSD Type: NotificationRequirementType
 */
class NotificationRequirementType
{
    /**
     * A container for extensions foreign to the document.
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonExtensionComponents\UBLExtension[] $uBLExtensions
     */
    private $uBLExtensions = null;

    /**
     * BBIE
     *  Notification Requirement. Notification Type Code. Code
     *  A code signifying the type of notification (e.g., pickup status).
     *  1
     *  Notification Requirement
     *  Notification Type Code
     *  Code
     *  Code. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NotificationTypeCode $notificationTypeCode
     */
    private $notificationTypeCode = null;

    /**
     * BBIE
     *  Notification Requirement. Post Event Notification Duration. Measure
     *  The length of time between the occurrence of a given event and the issuance of a notification.
     *  0..1
     *  Notification Requirement
     *  Post Event Notification Duration
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PostEventNotificationDurationMeasure $postEventNotificationDurationMeasure
     */
    private $postEventNotificationDurationMeasure = null;

    /**
     * BBIE
     *  Notification Requirement. Pre Event Notification Duration. Measure
     *  The length of time to elapse between the issuance of a notification and the occurrence of the event it relates to.
     *  0..1
     *  Notification Requirement
     *  Pre Event Notification Duration
     *  Measure
     *  Measure. Type
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreEventNotificationDurationMeasure $preEventNotificationDurationMeasure
     */
    private $preEventNotificationDurationMeasure = null;

    /**
     * ASBIE
     *  Notification Requirement. Notify_ Party. Party
     *  A party to be notified.
     *  0..n
     *  Notification Requirement
     *  Notify
     *  Party
     *  Party
     *  Party
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotifyParty[] $notifyParty
     */
    private $notifyParty = [
        
    ];

    /**
     * ASBIE
     *  Notification Requirement. Notification_ Period. Period
     *  A period during which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Period
     *  Period
     *  Period
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotificationPeriod[] $notificationPeriod
     */
    private $notificationPeriod = [
        
    ];

    /**
     * ASBIE
     *  Notification Requirement. Notification_ Location. Location
     *  A location at which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Location
     *  Location
     *  Location
     *
     * @var \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotificationLocation[] $notificationLocation
     */
    private $notificationLocation = [
        
    ];

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
     * Gets as notificationTypeCode
     *
     * BBIE
     *  Notification Requirement. Notification Type Code. Code
     *  A code signifying the type of notification (e.g., pickup status).
     *  1
     *  Notification Requirement
     *  Notification Type Code
     *  Code
     *  Code. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NotificationTypeCode
     */
    public function getNotificationTypeCode()
    {
        return $this->notificationTypeCode;
    }

    /**
     * Sets a new notificationTypeCode
     *
     * BBIE
     *  Notification Requirement. Notification Type Code. Code
     *  A code signifying the type of notification (e.g., pickup status).
     *  1
     *  Notification Requirement
     *  Notification Type Code
     *  Code
     *  Code. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NotificationTypeCode $notificationTypeCode
     * @return self
     */
    public function setNotificationTypeCode(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\NotificationTypeCode $notificationTypeCode)
    {
        $this->notificationTypeCode = $notificationTypeCode;
        return $this;
    }

    /**
     * Gets as postEventNotificationDurationMeasure
     *
     * BBIE
     *  Notification Requirement. Post Event Notification Duration. Measure
     *  The length of time between the occurrence of a given event and the issuance of a notification.
     *  0..1
     *  Notification Requirement
     *  Post Event Notification Duration
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PostEventNotificationDurationMeasure
     */
    public function getPostEventNotificationDurationMeasure()
    {
        return $this->postEventNotificationDurationMeasure;
    }

    /**
     * Sets a new postEventNotificationDurationMeasure
     *
     * BBIE
     *  Notification Requirement. Post Event Notification Duration. Measure
     *  The length of time between the occurrence of a given event and the issuance of a notification.
     *  0..1
     *  Notification Requirement
     *  Post Event Notification Duration
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PostEventNotificationDurationMeasure $postEventNotificationDurationMeasure
     * @return self
     */
    public function setPostEventNotificationDurationMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PostEventNotificationDurationMeasure $postEventNotificationDurationMeasure = null)
    {
        $this->postEventNotificationDurationMeasure = $postEventNotificationDurationMeasure;
        return $this;
    }

    /**
     * Gets as preEventNotificationDurationMeasure
     *
     * BBIE
     *  Notification Requirement. Pre Event Notification Duration. Measure
     *  The length of time to elapse between the issuance of a notification and the occurrence of the event it relates to.
     *  0..1
     *  Notification Requirement
     *  Pre Event Notification Duration
     *  Measure
     *  Measure. Type
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreEventNotificationDurationMeasure
     */
    public function getPreEventNotificationDurationMeasure()
    {
        return $this->preEventNotificationDurationMeasure;
    }

    /**
     * Sets a new preEventNotificationDurationMeasure
     *
     * BBIE
     *  Notification Requirement. Pre Event Notification Duration. Measure
     *  The length of time to elapse between the issuance of a notification and the occurrence of the event it relates to.
     *  0..1
     *  Notification Requirement
     *  Pre Event Notification Duration
     *  Measure
     *  Measure. Type
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreEventNotificationDurationMeasure $preEventNotificationDurationMeasure
     * @return self
     */
    public function setPreEventNotificationDurationMeasure(?\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonBasicComponents\PreEventNotificationDurationMeasure $preEventNotificationDurationMeasure = null)
    {
        $this->preEventNotificationDurationMeasure = $preEventNotificationDurationMeasure;
        return $this;
    }

    /**
     * Adds as notifyParty
     *
     * ASBIE
     *  Notification Requirement. Notify_ Party. Party
     *  A party to be notified.
     *  0..n
     *  Notification Requirement
     *  Notify
     *  Party
     *  Party
     *  Party
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotifyParty $notifyParty
     */
    public function addToNotifyParty(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotifyParty $notifyParty)
    {
        $this->notifyParty[] = $notifyParty;
        return $this;
    }

    /**
     * isset notifyParty
     *
     * ASBIE
     *  Notification Requirement. Notify_ Party. Party
     *  A party to be notified.
     *  0..n
     *  Notification Requirement
     *  Notify
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotifyParty($index)
    {
        return isset($this->notifyParty[$index]);
    }

    /**
     * unset notifyParty
     *
     * ASBIE
     *  Notification Requirement. Notify_ Party. Party
     *  A party to be notified.
     *  0..n
     *  Notification Requirement
     *  Notify
     *  Party
     *  Party
     *  Party
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotifyParty($index)
    {
        unset($this->notifyParty[$index]);
    }

    /**
     * Gets as notifyParty
     *
     * ASBIE
     *  Notification Requirement. Notify_ Party. Party
     *  A party to be notified.
     *  0..n
     *  Notification Requirement
     *  Notify
     *  Party
     *  Party
     *  Party
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotifyParty[]
     */
    public function getNotifyParty()
    {
        return $this->notifyParty;
    }

    /**
     * Sets a new notifyParty
     *
     * ASBIE
     *  Notification Requirement. Notify_ Party. Party
     *  A party to be notified.
     *  0..n
     *  Notification Requirement
     *  Notify
     *  Party
     *  Party
     *  Party
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotifyParty[] $notifyParty
     * @return self
     */
    public function setNotifyParty(?array $notifyParty = null)
    {
        $this->notifyParty = $notifyParty;
        return $this;
    }

    /**
     * Adds as notificationPeriod
     *
     * ASBIE
     *  Notification Requirement. Notification_ Period. Period
     *  A period during which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Period
     *  Period
     *  Period
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotificationPeriod $notificationPeriod
     */
    public function addToNotificationPeriod(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotificationPeriod $notificationPeriod)
    {
        $this->notificationPeriod[] = $notificationPeriod;
        return $this;
    }

    /**
     * isset notificationPeriod
     *
     * ASBIE
     *  Notification Requirement. Notification_ Period. Period
     *  A period during which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationPeriod($index)
    {
        return isset($this->notificationPeriod[$index]);
    }

    /**
     * unset notificationPeriod
     *
     * ASBIE
     *  Notification Requirement. Notification_ Period. Period
     *  A period during which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Period
     *  Period
     *  Period
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationPeriod($index)
    {
        unset($this->notificationPeriod[$index]);
    }

    /**
     * Gets as notificationPeriod
     *
     * ASBIE
     *  Notification Requirement. Notification_ Period. Period
     *  A period during which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Period
     *  Period
     *  Period
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotificationPeriod[]
     */
    public function getNotificationPeriod()
    {
        return $this->notificationPeriod;
    }

    /**
     * Sets a new notificationPeriod
     *
     * ASBIE
     *  Notification Requirement. Notification_ Period. Period
     *  A period during which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Period
     *  Period
     *  Period
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotificationPeriod[] $notificationPeriod
     * @return self
     */
    public function setNotificationPeriod(?array $notificationPeriod = null)
    {
        $this->notificationPeriod = $notificationPeriod;
        return $this;
    }

    /**
     * Adds as notificationLocation
     *
     * ASBIE
     *  Notification Requirement. Notification_ Location. Location
     *  A location at which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Location
     *  Location
     *  Location
     *
     * @return self
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotificationLocation $notificationLocation
     */
    public function addToNotificationLocation(\ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotificationLocation $notificationLocation)
    {
        $this->notificationLocation[] = $notificationLocation;
        return $this;
    }

    /**
     * isset notificationLocation
     *
     * ASBIE
     *  Notification Requirement. Notification_ Location. Location
     *  A location at which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return bool
     */
    public function issetNotificationLocation($index)
    {
        return isset($this->notificationLocation[$index]);
    }

    /**
     * unset notificationLocation
     *
     * ASBIE
     *  Notification Requirement. Notification_ Location. Location
     *  A location at which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Location
     *  Location
     *  Location
     *
     * @param int|string $index
     * @return void
     */
    public function unsetNotificationLocation($index)
    {
        unset($this->notificationLocation[$index]);
    }

    /**
     * Gets as notificationLocation
     *
     * ASBIE
     *  Notification Requirement. Notification_ Location. Location
     *  A location at which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Location
     *  Location
     *  Location
     *
     * @return \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotificationLocation[]
     */
    public function getNotificationLocation()
    {
        return $this->notificationLocation;
    }

    /**
     * Sets a new notificationLocation
     *
     * ASBIE
     *  Notification Requirement. Notification_ Location. Location
     *  A location at which a notification should be issued.
     *  0..n
     *  Notification Requirement
     *  Notification
     *  Location
     *  Location
     *  Location
     *
     * @param \ECSSolutions\UblToolset\Structure\V2_3\Common\CommonAggregateComponents\NotificationLocation[] $notificationLocation
     * @return self
     */
    public function setNotificationLocation(?array $notificationLocation = null)
    {
        $this->notificationLocation = $notificationLocation;
        return $this;
    }
}

