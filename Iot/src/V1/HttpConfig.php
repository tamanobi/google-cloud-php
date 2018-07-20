<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iot/v1/resources.proto

namespace Google\Cloud\Iot\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The configuration of the HTTP bridge for a device registry.
 *
 * Generated from protobuf message <code>google.cloud.iot.v1.HttpConfig</code>
 */
class HttpConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * If enabled, allows devices to use DeviceService via the HTTP protocol.
     * Otherwise, any requests to DeviceService will fail for this registry.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.HttpState http_enabled_state = 1;</code>
     */
    private $http_enabled_state = 0;

    public function __construct() {
        \GPBMetadata\Google\Cloud\Iot\V1\Resources::initOnce();
        parent::__construct();
    }

    /**
     * If enabled, allows devices to use DeviceService via the HTTP protocol.
     * Otherwise, any requests to DeviceService will fail for this registry.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.HttpState http_enabled_state = 1;</code>
     * @return int
     */
    public function getHttpEnabledState()
    {
        return $this->http_enabled_state;
    }

    /**
     * If enabled, allows devices to use DeviceService via the HTTP protocol.
     * Otherwise, any requests to DeviceService will fail for this registry.
     *
     * Generated from protobuf field <code>.google.cloud.iot.v1.HttpState http_enabled_state = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setHttpEnabledState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Iot\V1\HttpState::class);
        $this->http_enabled_state = $var;

        return $this;
    }

}
