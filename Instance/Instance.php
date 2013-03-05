<?php

namespace Wix\FrameworkComponent\Instance;

/**
 * A class that represents a decoded instance and provides information on that instance.
 */
class Instance implements InstanceInterface
{
    /**
     * An instance to provide information on
     *
     * @var \stdClass object
     */
    private $instance;

    /**
     * @param \stdClass $instance an instance to provide information on
     */
    public function __construct(\stdClass $instance)
    {
        $this->instance = $instance;
    }

    /**
     * @inheritDoc
     */
    public function getInstanceId()
    {
        if (!isset($this->instance->instanceId)) {
            return null;
        }

        return $this->instance->instanceId;
    }

    /**
     * @inheritDoc
     */
    public function getSignDate()
    {
        if (!isset($this->instance->signDate)) {
            return null;
        }

        return $this->instance->signDate;
    }

    /**
     * @inheritDoc
     */
    public function getUid()
    {
        if (!isset($this->instance->uid)) {
            return null;
        }

        return $this->instance->uid;
    }

    /**
     * @inheritDoc
     */
    public function getPermissions()
    {
        if (!isset($this->instance->permissions)) {
            return null;
        }

        return $this->instance->permissions;
    }

    /**
     * @inheritDoc
     */
    public function getIp()
    {
        if (!isset($this->instance->ipAndPort)) {
            return null;
        }

        $exploded = explode('/', $this->instance->ipAndPort);
        return $exploded[1];
    }

    /**
     * @inheritDoc
     */
    public function getPort()
    {
        if (!isset($this->instance->ipAndPort)) {
            return null;
        }

        $exploded = explode('/', $this->instance->ipAndPort);
        return (int) $exploded[0];
    }

    /**
     * @inheritDoc
     */
    public function getDemoMode()
    {
        if (!isset($this->instance->demoMode)) {
            return null;
        }

        return $this->instance->demoMode;
    }

    /**
     * @inheritDoc
     */
    public function getVendorProductId()
    {
        if (!isset($this->instance->vendorProductId)) {
            return null;
        }

        return $this->instance->vendorProductId;
    }
}