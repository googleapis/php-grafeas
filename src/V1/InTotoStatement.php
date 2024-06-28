<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/intoto_statement.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Spec defined at
 * https://github.com/in-toto/attestation/tree/main/spec#statement The
 * serialized InTotoStatement will be stored as Envelope.payload.
 * Envelope.payloadType is always "application/vnd.in-toto+json".
 *
 * Generated from protobuf message <code>grafeas.v1.InTotoStatement</code>
 */
class InTotoStatement extends \Google\Protobuf\Internal\Message
{
    /**
     * Always `https://in-toto.io/Statement/v0.1`.
     *
     * Generated from protobuf field <code>string type = 1 [json_name = "_type"];</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>repeated .grafeas.v1.Subject subject = 2;</code>
     */
    private $subject;
    /**
     * `https://slsa.dev/provenance/v0.1` for SlsaProvenance.
     *
     * Generated from protobuf field <code>string predicate_type = 3;</code>
     */
    protected $predicate_type = '';
    protected $predicate;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *           Always `https://in-toto.io/Statement/v0.1`.
     *     @type array<\Grafeas\V1\Subject>|\Google\Protobuf\Internal\RepeatedField $subject
     *     @type string $predicate_type
     *           `https://slsa.dev/provenance/v0.1` for SlsaProvenance.
     *     @type \Grafeas\V1\InTotoProvenance $provenance
     *     @type \Grafeas\V1\SlsaProvenance $slsa_provenance
     *     @type \Grafeas\V1\SlsaProvenanceZeroTwo $slsa_provenance_zero_two
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\IntotoStatement::initOnce();
        parent::__construct($data);
    }

    /**
     * Always `https://in-toto.io/Statement/v0.1`.
     *
     * Generated from protobuf field <code>string type = 1 [json_name = "_type"];</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Always `https://in-toto.io/Statement/v0.1`.
     *
     * Generated from protobuf field <code>string type = 1 [json_name = "_type"];</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .grafeas.v1.Subject subject = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Generated from protobuf field <code>repeated .grafeas.v1.Subject subject = 2;</code>
     * @param array<\Grafeas\V1\Subject>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubject($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Grafeas\V1\Subject::class);
        $this->subject = $arr;

        return $this;
    }

    /**
     * `https://slsa.dev/provenance/v0.1` for SlsaProvenance.
     *
     * Generated from protobuf field <code>string predicate_type = 3;</code>
     * @return string
     */
    public function getPredicateType()
    {
        return $this->predicate_type;
    }

    /**
     * `https://slsa.dev/provenance/v0.1` for SlsaProvenance.
     *
     * Generated from protobuf field <code>string predicate_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPredicateType($var)
    {
        GPBUtil::checkString($var, True);
        $this->predicate_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.InTotoProvenance provenance = 4;</code>
     * @return \Grafeas\V1\InTotoProvenance|null
     */
    public function getProvenance()
    {
        return $this->readOneof(4);
    }

    public function hasProvenance()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.InTotoProvenance provenance = 4;</code>
     * @param \Grafeas\V1\InTotoProvenance $var
     * @return $this
     */
    public function setProvenance($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\InTotoProvenance::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.SlsaProvenance slsa_provenance = 5;</code>
     * @return \Grafeas\V1\SlsaProvenance|null
     */
    public function getSlsaProvenance()
    {
        return $this->readOneof(5);
    }

    public function hasSlsaProvenance()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.SlsaProvenance slsa_provenance = 5;</code>
     * @param \Grafeas\V1\SlsaProvenance $var
     * @return $this
     */
    public function setSlsaProvenance($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\SlsaProvenance::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.SlsaProvenanceZeroTwo slsa_provenance_zero_two = 6;</code>
     * @return \Grafeas\V1\SlsaProvenanceZeroTwo|null
     */
    public function getSlsaProvenanceZeroTwo()
    {
        return $this->readOneof(6);
    }

    public function hasSlsaProvenanceZeroTwo()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.SlsaProvenanceZeroTwo slsa_provenance_zero_two = 6;</code>
     * @param \Grafeas\V1\SlsaProvenanceZeroTwo $var
     * @return $this
     */
    public function setSlsaProvenanceZeroTwo($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\SlsaProvenanceZeroTwo::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPredicate()
    {
        return $this->whichOneof("predicate");
    }

}

