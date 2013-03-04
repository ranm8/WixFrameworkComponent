<?php

namespace Wix\FrameworkComponent;

use Wix\FrameworkComponent\Instance\InstanceInterface;

interface InstanceDecoderInterface {

    /**
     * Parses Wix instance and returns an Instance object
     *
     * @param string $instance
     * @return InstanceInterface
     */
    public function parse($instance);
}