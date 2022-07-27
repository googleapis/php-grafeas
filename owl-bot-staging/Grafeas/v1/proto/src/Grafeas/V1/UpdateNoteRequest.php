<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/grafeas.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request to update a note.
 *
 * Generated from protobuf message <code>grafeas.v1.UpdateNoteRequest</code>
 */
class UpdateNoteRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the note in the form of
     * `projects/[PROVIDER_ID]/notes/[NOTE_ID]`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * The updated note.
     *
     * Generated from protobuf field <code>.grafeas.v1.Note note = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $note = null;
    /**
     * The fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     */
    protected $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the note in the form of
     *           `projects/[PROVIDER_ID]/notes/[NOTE_ID]`.
     *     @type \Grafeas\V1\Note $note
     *           The updated note.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The fields to update.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Grafeas::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the note in the form of
     * `projects/[PROVIDER_ID]/notes/[NOTE_ID]`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the note in the form of
     * `projects/[PROVIDER_ID]/notes/[NOTE_ID]`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The updated note.
     *
     * Generated from protobuf field <code>.grafeas.v1.Note note = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Grafeas\V1\Note|null
     */
    public function getNote()
    {
        return $this->note;
    }

    public function hasNote()
    {
        return isset($this->note);
    }

    public function clearNote()
    {
        unset($this->note);
    }

    /**
     * The updated note.
     *
     * Generated from protobuf field <code>.grafeas.v1.Note note = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Grafeas\V1\Note $var
     * @return $this
     */
    public function setNote($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\Note::class);
        $this->note = $var;

        return $this;
    }

    /**
     * The fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The fields to update.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 3;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}
