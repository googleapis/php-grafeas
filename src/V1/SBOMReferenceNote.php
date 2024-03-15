<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/sbom.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The note representing an SBOM reference.
 *
 * Generated from protobuf message <code>grafeas.v1.SBOMReferenceNote</code>
 */
class SBOMReferenceNote extends \Google\Protobuf\Internal\Message
{
    /**
     * The format that SBOM takes. E.g. may be spdx, cyclonedx, etc...
     *
     * Generated from protobuf field <code>string format = 1;</code>
     */
    private $format = '';
    /**
     * The version of the format that the SBOM takes. E.g. if the format
     * is spdx, the version may be 2.3.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     */
    private $version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $format
     *           The format that SBOM takes. E.g. may be spdx, cyclonedx, etc...
     *     @type string $version
     *           The version of the format that the SBOM takes. E.g. if the format
     *           is spdx, the version may be 2.3.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Sbom::initOnce();
        parent::__construct($data);
    }

    /**
     * The format that SBOM takes. E.g. may be spdx, cyclonedx, etc...
     *
     * Generated from protobuf field <code>string format = 1;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * The format that SBOM takes. E.g. may be spdx, cyclonedx, etc...
     *
     * Generated from protobuf field <code>string format = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->format = $var;

        return $this;
    }

    /**
     * The version of the format that the SBOM takes. E.g. if the format
     * is spdx, the version may be 2.3.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * The version of the format that the SBOM takes. E.g. if the format
     * is spdx, the version may be 2.3.
     *
     * Generated from protobuf field <code>string version = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

}
