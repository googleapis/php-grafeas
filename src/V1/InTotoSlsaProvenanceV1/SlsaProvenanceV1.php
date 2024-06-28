<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/intoto_statement.proto

namespace Grafeas\V1\InTotoSlsaProvenanceV1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Keep in sync with schema at
 * https://github.com/slsa-framework/slsa/blob/main/docs/provenance/schema/v1/provenance.proto
 * Builder renamed to ProvenanceBuilder because of Java conflicts.
 *
 * Generated from protobuf message <code>grafeas.v1.InTotoSlsaProvenanceV1.SlsaProvenanceV1</code>
 */
class SlsaProvenanceV1 extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.grafeas.v1.InTotoSlsaProvenanceV1.BuildDefinition build_definition = 1;</code>
     */
    protected $build_definition = null;
    /**
     * Generated from protobuf field <code>.grafeas.v1.InTotoSlsaProvenanceV1.RunDetails run_details = 2;</code>
     */
    protected $run_details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Grafeas\V1\InTotoSlsaProvenanceV1\BuildDefinition $build_definition
     *     @type \Grafeas\V1\InTotoSlsaProvenanceV1\RunDetails $run_details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\IntotoStatement::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.InTotoSlsaProvenanceV1.BuildDefinition build_definition = 1;</code>
     * @return \Grafeas\V1\InTotoSlsaProvenanceV1\BuildDefinition|null
     */
    public function getBuildDefinition()
    {
        return $this->build_definition;
    }

    public function hasBuildDefinition()
    {
        return isset($this->build_definition);
    }

    public function clearBuildDefinition()
    {
        unset($this->build_definition);
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.InTotoSlsaProvenanceV1.BuildDefinition build_definition = 1;</code>
     * @param \Grafeas\V1\InTotoSlsaProvenanceV1\BuildDefinition $var
     * @return $this
     */
    public function setBuildDefinition($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\InTotoSlsaProvenanceV1\BuildDefinition::class);
        $this->build_definition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.InTotoSlsaProvenanceV1.RunDetails run_details = 2;</code>
     * @return \Grafeas\V1\InTotoSlsaProvenanceV1\RunDetails|null
     */
    public function getRunDetails()
    {
        return $this->run_details;
    }

    public function hasRunDetails()
    {
        return isset($this->run_details);
    }

    public function clearRunDetails()
    {
        unset($this->run_details);
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.InTotoSlsaProvenanceV1.RunDetails run_details = 2;</code>
     * @param \Grafeas\V1\InTotoSlsaProvenanceV1\RunDetails $var
     * @return $this
     */
    public function setRunDetails($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\InTotoSlsaProvenanceV1\RunDetails::class);
        $this->run_details = $var;

        return $this;
    }

}


