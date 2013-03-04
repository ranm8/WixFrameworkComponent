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
     * @return string
     */
    public function getPermissions();
}