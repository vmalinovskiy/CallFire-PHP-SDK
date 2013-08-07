<?php

namespace CallFire\Common\Resource;

class ContactBatch extends AbstractResource
{

    /**
     * @var long
     */
    public $id = null;

    /**
     * @var string
     */
    public $name = null;

    /**
     * @var string
     */
    public $status = null;

    /**
     * @var long
     */
    public $broadcastId = null;

    /**
     * @var dateTime
     */
    public $created = null;

    /**
     * @var int
     */
    public $size = null;

    /**
     * @var int
     */
    public $remaining = null;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    public function getBroadcastId()
    {
        return $this->broadcastId;
    }

    public function setBroadcastId($broadcastId)
    {
        $this->broadcastId = $broadcastId;

        return $this;
    }

    public function getCreated()
    {
        return $this->created;
    }

    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    public function getRemaining()
    {
        return $this->remaining;
    }

    public function setRemaining($remaining)
    {
        $this->remaining = $remaining;

        return $this;
    }

}