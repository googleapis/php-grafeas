<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/provenance.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Artifact describes a build product.
 *
 * Generated from protobuf message <code>grafeas.v1.Artifact</code>
 */
class Artifact extends \Google\Protobuf\Internal\Message
{
    /**
     * Hash or checksum value of a binary, or Docker Registry 2.0 digest of a
     * container.
     *
     * Generated from protobuf field <code>string checksum = 1;</code>
     */
    protected $checksum = '';
    /**
     * Artifact ID, if any; for container images, this will be a URL by digest
     * like `gcr.io/projectID/imagename&#64;sha256:123456`.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     */
    protected $id = '';
    /**
     * Related artifact names. This may be the path to a binary or jar file, or in
     * the case of a container build, the name used to push the container image to
     * Google Container Registry, as presented to `docker push`. Note that a
     * single Artifact ID can have multiple names, for example if two tags are
     * applied to one image.
     *
     * Generated from protobuf field <code>repeated string names = 3;</code>
     */
    private $names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $checksum
     *           Hash or checksum value of a binary, or Docker Registry 2.0 digest of a
     *           container.
     *     @type string $id
     *           Artifact ID, if any; for container images, this will be a URL by digest
     *           like `gcr.io/projectID/imagename&#64;sha256:123456`.
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $names
     *           Related artifact names. This may be the path to a binary or jar file, or in
     *           the case of a container build, the name used to push the container image to
     *           Google Container Registry, as presented to `docker push`. Note that a
     *           single Artifact ID can have multiple names, for example if two tags are
     *           applied to one image.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Provenance::initOnce();
        parent::__construct($data);
    }

    /**
     * Hash or checksum value of a binary, or Docker Registry 2.0 digest of a
     * container.
     *
     * Generated from protobuf field <code>string checksum = 1;</code>
     * @return string
     */
    public function getChecksum()
    {
        return $this->checksum;
    }

    /**
     * Hash or checksum value of a binary, or Docker Registry 2.0 digest of a
     * container.
     *
     * Generated from protobuf field <code>string checksum = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setChecksum($var)
    {
        GPBUtil::checkString($var, True);
        $this->checksum = $var;

        return $this;
    }

    /**
     * Artifact ID, if any; for container images, this will be a URL by digest
     * like `gcr.io/projectID/imagename&#64;sha256:123456`.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Artifact ID, if any; for container images, this will be a URL by digest
     * like `gcr.io/projectID/imagename&#64;sha256:123456`.
     *
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Related artifact names. This may be the path to a binary or jar file, or in
     * the case of a container build, the name used to push the container image to
     * Google Container Registry, as presented to `docker push`. Note that a
     * single Artifact ID can have multiple names, for example if two tags are
     * applied to one image.
     *
     * Generated from protobuf field <code>repeated string names = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNames()
    {
        return $this->names;
    }

    /**
     * Related artifact names. This may be the path to a binary or jar file, or in
     * the case of a container build, the name used to push the container image to
     * Google Container Registry, as presented to `docker push`. Note that a
     * single Artifact ID can have multiple names, for example if two tags are
     * applied to one image.
     *
     * Generated from protobuf field <code>repeated string names = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->names = $arr;

        return $this;
    }

}

