<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: grafeas/v1/discovery.proto

namespace Grafeas\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Provides information about the analysis status of a discovered resource.
 *
 * Generated from protobuf message <code>grafeas.v1.DiscoveryOccurrence</code>
 */
class DiscoveryOccurrence extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the resource is continuously analyzed.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.ContinuousAnalysis continuous_analysis = 1;</code>
     */
    protected $continuous_analysis = 0;
    /**
     * The status of discovery for the resource.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.AnalysisStatus analysis_status = 2;</code>
     */
    protected $analysis_status = 0;
    /**
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.AnalysisCompleted analysis_completed = 7;</code>
     */
    protected $analysis_completed = null;
    /**
     * Indicates any errors encountered during analysis of a resource. There
     * could be 0 or more of these errors.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status analysis_error = 8;</code>
     */
    private $analysis_error;
    /**
     * When an error is encountered this will contain a LocalizedMessage under
     * details to show to the user. The LocalizedMessage is output only and
     * populated by the API.
     *
     * Generated from protobuf field <code>.google.rpc.Status analysis_status_error = 3;</code>
     */
    protected $analysis_status_error = null;
    /**
     * The CPE of the resource being scanned.
     *
     * Generated from protobuf field <code>string cpe = 4;</code>
     */
    protected $cpe = '';
    /**
     * The last time this resource was scanned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_scan_time = 5;</code>
     */
    protected $last_scan_time = null;
    /**
     * The time occurrences related to this discovery occurrence were archived.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp archive_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $archive_time = null;
    /**
     * The status of an SBOM generation.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.SBOMStatus sbom_status = 9;</code>
     */
    protected $sbom_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $continuous_analysis
     *           Whether the resource is continuously analyzed.
     *     @type int $analysis_status
     *           The status of discovery for the resource.
     *     @type \Grafeas\V1\DiscoveryOccurrence\AnalysisCompleted $analysis_completed
     *     @type array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $analysis_error
     *           Indicates any errors encountered during analysis of a resource. There
     *           could be 0 or more of these errors.
     *     @type \Google\Rpc\Status $analysis_status_error
     *           When an error is encountered this will contain a LocalizedMessage under
     *           details to show to the user. The LocalizedMessage is output only and
     *           populated by the API.
     *     @type string $cpe
     *           The CPE of the resource being scanned.
     *     @type \Google\Protobuf\Timestamp $last_scan_time
     *           The last time this resource was scanned.
     *     @type \Google\Protobuf\Timestamp $archive_time
     *           The time occurrences related to this discovery occurrence were archived.
     *     @type \Grafeas\V1\DiscoveryOccurrence\SBOMStatus $sbom_status
     *           The status of an SBOM generation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Grafeas\V1\Discovery::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the resource is continuously analyzed.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.ContinuousAnalysis continuous_analysis = 1;</code>
     * @return int
     */
    public function getContinuousAnalysis()
    {
        return $this->continuous_analysis;
    }

    /**
     * Whether the resource is continuously analyzed.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.ContinuousAnalysis continuous_analysis = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setContinuousAnalysis($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\DiscoveryOccurrence\ContinuousAnalysis::class);
        $this->continuous_analysis = $var;

        return $this;
    }

    /**
     * The status of discovery for the resource.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.AnalysisStatus analysis_status = 2;</code>
     * @return int
     */
    public function getAnalysisStatus()
    {
        return $this->analysis_status;
    }

    /**
     * The status of discovery for the resource.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.AnalysisStatus analysis_status = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setAnalysisStatus($var)
    {
        GPBUtil::checkEnum($var, \Grafeas\V1\DiscoveryOccurrence\AnalysisStatus::class);
        $this->analysis_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.AnalysisCompleted analysis_completed = 7;</code>
     * @return \Grafeas\V1\DiscoveryOccurrence\AnalysisCompleted|null
     */
    public function getAnalysisCompleted()
    {
        return $this->analysis_completed;
    }

    public function hasAnalysisCompleted()
    {
        return isset($this->analysis_completed);
    }

    public function clearAnalysisCompleted()
    {
        unset($this->analysis_completed);
    }

    /**
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.AnalysisCompleted analysis_completed = 7;</code>
     * @param \Grafeas\V1\DiscoveryOccurrence\AnalysisCompleted $var
     * @return $this
     */
    public function setAnalysisCompleted($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\DiscoveryOccurrence\AnalysisCompleted::class);
        $this->analysis_completed = $var;

        return $this;
    }

    /**
     * Indicates any errors encountered during analysis of a resource. There
     * could be 0 or more of these errors.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status analysis_error = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAnalysisError()
    {
        return $this->analysis_error;
    }

    /**
     * Indicates any errors encountered during analysis of a resource. There
     * could be 0 or more of these errors.
     *
     * Generated from protobuf field <code>repeated .google.rpc.Status analysis_error = 8;</code>
     * @param array<\Google\Rpc\Status>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAnalysisError($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->analysis_error = $arr;

        return $this;
    }

    /**
     * When an error is encountered this will contain a LocalizedMessage under
     * details to show to the user. The LocalizedMessage is output only and
     * populated by the API.
     *
     * Generated from protobuf field <code>.google.rpc.Status analysis_status_error = 3;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getAnalysisStatusError()
    {
        return $this->analysis_status_error;
    }

    public function hasAnalysisStatusError()
    {
        return isset($this->analysis_status_error);
    }

    public function clearAnalysisStatusError()
    {
        unset($this->analysis_status_error);
    }

    /**
     * When an error is encountered this will contain a LocalizedMessage under
     * details to show to the user. The LocalizedMessage is output only and
     * populated by the API.
     *
     * Generated from protobuf field <code>.google.rpc.Status analysis_status_error = 3;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setAnalysisStatusError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->analysis_status_error = $var;

        return $this;
    }

    /**
     * The CPE of the resource being scanned.
     *
     * Generated from protobuf field <code>string cpe = 4;</code>
     * @return string
     */
    public function getCpe()
    {
        return $this->cpe;
    }

    /**
     * The CPE of the resource being scanned.
     *
     * Generated from protobuf field <code>string cpe = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCpe($var)
    {
        GPBUtil::checkString($var, True);
        $this->cpe = $var;

        return $this;
    }

    /**
     * The last time this resource was scanned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_scan_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getLastScanTime()
    {
        return $this->last_scan_time;
    }

    public function hasLastScanTime()
    {
        return isset($this->last_scan_time);
    }

    public function clearLastScanTime()
    {
        unset($this->last_scan_time);
    }

    /**
     * The last time this resource was scanned.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp last_scan_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setLastScanTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->last_scan_time = $var;

        return $this;
    }

    /**
     * The time occurrences related to this discovery occurrence were archived.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp archive_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getArchiveTime()
    {
        return $this->archive_time;
    }

    public function hasArchiveTime()
    {
        return isset($this->archive_time);
    }

    public function clearArchiveTime()
    {
        unset($this->archive_time);
    }

    /**
     * The time occurrences related to this discovery occurrence were archived.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp archive_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setArchiveTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->archive_time = $var;

        return $this;
    }

    /**
     * The status of an SBOM generation.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.SBOMStatus sbom_status = 9;</code>
     * @return \Grafeas\V1\DiscoveryOccurrence\SBOMStatus|null
     */
    public function getSbomStatus()
    {
        return $this->sbom_status;
    }

    public function hasSbomStatus()
    {
        return isset($this->sbom_status);
    }

    public function clearSbomStatus()
    {
        unset($this->sbom_status);
    }

    /**
     * The status of an SBOM generation.
     *
     * Generated from protobuf field <code>.grafeas.v1.DiscoveryOccurrence.SBOMStatus sbom_status = 9;</code>
     * @param \Grafeas\V1\DiscoveryOccurrence\SBOMStatus $var
     * @return $this
     */
    public function setSbomStatus($var)
    {
        GPBUtil::checkMessage($var, \Grafeas\V1\DiscoveryOccurrence\SBOMStatus::class);
        $this->sbom_status = $var;

        return $this;
    }

}

