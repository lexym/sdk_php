<?php
namespace bunq\Model\Generated\Object;

use bunq\Model\Core\BunqModel;

/**
 * @generated
 */
class NotificationUrl extends BunqModel
{
    /**
     * @var string
     */
    protected $targetUrl;

    /**
     * @var string
     */
    protected $category;

    /**
     * @var string
     */
    protected $eventType;

    /**
     * @var NotificationAnchorObject
     */
    protected $object;

    /**
     * @return string
     */
    public function getTargetUrl()
    {
        return $this->targetUrl;
    }

    /**
     * @param string $targetUrl
     */
    public function setTargetUrl($targetUrl)
    {
        $this->targetUrl = $targetUrl;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param string $eventType
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * @return NotificationAnchorObject
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param NotificationAnchorObject $object
     */
    public function setObject($object)
    {
        $this->object = $object;
    }
}
