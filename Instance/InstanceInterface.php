<?php

namespace Wix\FrameworkComponent\Instance;

/**
 *
 */
interface InstanceInterface {

    /**
     * Returns the instance id. This property identifies an instance of an app inside a Wix website.
     *
     * @return string
     */
    public function getInstanceId();

    /**
     * Returns the instance sign date. This is the date this Wix user signed into Wix.
     *
     * @return string
     */
    public function getSignDate();

    /**
     * Returns the instance uid. It identifies a Wix user.
     *
     * @return mixed
     */
    public function getUid();

    /**
     * Returns the current user permission
     *
     * @return string
     */
    public function getPermissions();

    /**
     * Returns the user IP
     *
     * @return string
     */
    public function getIp();

    /**
     * Returns the user port
     *
     * @return int
     */
    public function getPort();

    /**
     * Determines if in demo mode or not
     *
     * @return bool
     */
    public function getDemoMode();

    /**
     * Returns the premium vendor product ID if exists
     *
     * @return string|null
     */
    public function getVendorProductId();
}