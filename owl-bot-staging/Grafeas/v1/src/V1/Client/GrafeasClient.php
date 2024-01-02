<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * Generated by gapic-generator-php from the file
 * https://github.com/googleapis/googleapis/blob/master/grafeas/v1/grafeas.proto
 * Updates to the above are reflected here through a refresh process.
 */

namespace Grafeas\V1\Client;

use Google\ApiCore\ApiException;
use Google\ApiCore\CredentialsWrapper;
use Google\ApiCore\GapicClientTrait;
use Google\ApiCore\PagedListResponse;
use Google\ApiCore\ResourceHelperTrait;
use Google\ApiCore\RetrySettings;
use Google\ApiCore\Transport\TransportInterface;
use Google\ApiCore\ValidationException;
use Google\Auth\FetchAuthTokenInterface;
use Grafeas\V1\BatchCreateNotesRequest;
use Grafeas\V1\BatchCreateNotesResponse;
use Grafeas\V1\BatchCreateOccurrencesRequest;
use Grafeas\V1\BatchCreateOccurrencesResponse;
use Grafeas\V1\CreateNoteRequest;
use Grafeas\V1\CreateOccurrenceRequest;
use Grafeas\V1\DeleteNoteRequest;
use Grafeas\V1\DeleteOccurrenceRequest;
use Grafeas\V1\GetNoteRequest;
use Grafeas\V1\GetOccurrenceNoteRequest;
use Grafeas\V1\GetOccurrenceRequest;
use Grafeas\V1\ListNoteOccurrencesRequest;
use Grafeas\V1\ListNotesRequest;
use Grafeas\V1\ListOccurrencesRequest;
use Grafeas\V1\Note;
use Grafeas\V1\Occurrence;
use Grafeas\V1\UpdateNoteRequest;
use Grafeas\V1\UpdateOccurrenceRequest;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * Service Description: [Grafeas](https://grafeas.io) API.
 *
 * Retrieves analysis results of Cloud components such as Docker container
 * images.
 *
 * Analysis results are stored as a series of occurrences. An `Occurrence`
 * contains information about a specific analysis instance on a resource. An
 * occurrence refers to a `Note`. A note contains details describing the
 * analysis and is generally stored in a separate project, called a `Provider`.
 * Multiple occurrences can refer to the same note.
 *
 * For example, an SSL vulnerability could affect multiple images. In this case,
 * there would be one note for the vulnerability and an occurrence for each
 * image with the vulnerability referring to that note.
 *
 * This class provides the ability to make remote calls to the backing service through method
 * calls that map to API methods.
 *
 * Many parameters require resource names to be formatted in a particular way. To
 * assist with these names, this class includes a format method for each type of
 * name, and additionally a parseName method to extract the individual identifiers
 * contained within formatted names that are returned by the API.
 *
 * @method PromiseInterface batchCreateNotesAsync(BatchCreateNotesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface batchCreateOccurrencesAsync(BatchCreateOccurrencesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createNoteAsync(CreateNoteRequest $request, array $optionalArgs = [])
 * @method PromiseInterface createOccurrenceAsync(CreateOccurrenceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteNoteAsync(DeleteNoteRequest $request, array $optionalArgs = [])
 * @method PromiseInterface deleteOccurrenceAsync(DeleteOccurrenceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getNoteAsync(GetNoteRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getOccurrenceAsync(GetOccurrenceRequest $request, array $optionalArgs = [])
 * @method PromiseInterface getOccurrenceNoteAsync(GetOccurrenceNoteRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listNoteOccurrencesAsync(ListNoteOccurrencesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listNotesAsync(ListNotesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface listOccurrencesAsync(ListOccurrencesRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateNoteAsync(UpdateNoteRequest $request, array $optionalArgs = [])
 * @method PromiseInterface updateOccurrenceAsync(UpdateOccurrenceRequest $request, array $optionalArgs = [])
 */
final class GrafeasClient
{
    use GapicClientTrait;
    use ResourceHelperTrait;

    /** The name of the service. */
    private const SERVICE_NAME = 'grafeas.v1.Grafeas';

    /**
     * The default address of the service.
     *
     * @deprecated SERVICE_ADDRESS_TEMPLATE should be used instead.
     */
    private const SERVICE_ADDRESS = 'containeranalysis.googleapis.com';

    /** The address template of the service. */
    private const SERVICE_ADDRESS_TEMPLATE = 'containeranalysis.UNIVERSE_DOMAIN';

    /** The default port of the service. */
    private const DEFAULT_SERVICE_PORT = 443;

    /** The name of the code generator, to be included in the agent header. */
    private const CODEGEN_NAME = 'gapic';

    /** The default scopes required by the service. */
    public static $serviceScopes = [];

    private static function getClientDefaults()
    {
        return [
            'serviceName' => self::SERVICE_NAME,
            'apiEndpoint' => self::SERVICE_ADDRESS . ':' . self::DEFAULT_SERVICE_PORT,
            'clientConfig' => __DIR__ . '/../resources/grafeas_client_config.json',
            'descriptorsConfigPath' => __DIR__ . '/../resources/grafeas_descriptor_config.php',
            'gcpApiConfigPath' => __DIR__ . '/../resources/grafeas_grpc_config.json',
            'credentialsConfig' => [
                'defaultScopes' => self::$serviceScopes,
            ],
            'transportConfig' => [
                'rest' => [
                    'restClientConfigPath' => __DIR__ . '/../resources/grafeas_rest_client_config.php',
                ],
            ],
        ];
    }

    /**
     * Formats a string containing the fully-qualified path to represent a note
     * resource.
     *
     * @param string $project
     * @param string $note
     *
     * @return string The formatted note resource.
     */
    public static function noteName(string $project, string $note): string
    {
        return self::getPathTemplate('note')->render([
            'project' => $project,
            'note' => $note,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a occurrence
     * resource.
     *
     * @param string $project
     * @param string $occurrence
     *
     * @return string The formatted occurrence resource.
     */
    public static function occurrenceName(string $project, string $occurrence): string
    {
        return self::getPathTemplate('occurrence')->render([
            'project' => $project,
            'occurrence' => $occurrence,
        ]);
    }

    /**
     * Formats a string containing the fully-qualified path to represent a project
     * resource.
     *
     * @param string $project
     *
     * @return string The formatted project resource.
     */
    public static function projectName(string $project): string
    {
        return self::getPathTemplate('project')->render([
            'project' => $project,
        ]);
    }

    /**
     * Parses a formatted name string and returns an associative array of the components in the name.
     * The following name formats are supported:
     * Template: Pattern
     * - note: projects/{project}/notes/{note}
     * - occurrence: projects/{project}/occurrences/{occurrence}
     * - project: projects/{project}
     *
     * The optional $template argument can be supplied to specify a particular pattern,
     * and must match one of the templates listed above. If no $template argument is
     * provided, or if the $template argument does not match one of the templates
     * listed, then parseName will check each of the supported templates, and return
     * the first match.
     *
     * @param string $formattedName The formatted name string
     * @param string $template      Optional name of template to match
     *
     * @return array An associative array from name component IDs to component values.
     *
     * @throws ValidationException If $formattedName could not be matched.
     */
    public static function parseName(string $formattedName, string $template = null): array
    {
        return self::parseFormattedName($formattedName, $template);
    }

    /**
     * Constructor.
     *
     * @param array $options {
     *     Optional. Options for configuring the service API wrapper.
     *
     *     @type string $apiEndpoint
     *           The address of the API remote host. May optionally include the port, formatted
     *           as "<uri>:<port>". Default 'containeranalysis.googleapis.com:443'.
     *     @type string|array|FetchAuthTokenInterface|CredentialsWrapper $credentials
     *           The credentials to be used by the client to authorize API calls. This option
     *           accepts either a path to a credentials file, or a decoded credentials file as a
     *           PHP array.
     *           *Advanced usage*: In addition, this option can also accept a pre-constructed
     *           {@see \Google\Auth\FetchAuthTokenInterface} object or
     *           {@see \Google\ApiCore\CredentialsWrapper} object. Note that when one of these
     *           objects are provided, any settings in $credentialsConfig will be ignored.
     *     @type array $credentialsConfig
     *           Options used to configure credentials, including auth token caching, for the
     *           client. For a full list of supporting configuration options, see
     *           {@see \Google\ApiCore\CredentialsWrapper::build()} .
     *     @type bool $disableRetries
     *           Determines whether or not retries defined by the client configuration should be
     *           disabled. Defaults to `false`.
     *     @type string|array $clientConfig
     *           Client method configuration, including retry settings. This option can be either
     *           a path to a JSON file, or a PHP array containing the decoded JSON data. By
     *           default this settings points to the default client config file, which is
     *           provided in the resources folder.
     *     @type string|TransportInterface $transport
     *           The transport used for executing network requests. May be either the string
     *           `rest` or `grpc`. Defaults to `grpc` if gRPC support is detected on the system.
     *           *Advanced usage*: Additionally, it is possible to pass in an already
     *           instantiated {@see \Google\ApiCore\Transport\TransportInterface} object. Note
     *           that when this object is provided, any settings in $transportConfig, and any
     *           $apiEndpoint setting, will be ignored.
     *     @type array $transportConfig
     *           Configuration options that will be used to construct the transport. Options for
     *           each supported transport type should be passed in a key for that transport. For
     *           example:
     *           $transportConfig = [
     *               'grpc' => [...],
     *               'rest' => [...],
     *           ];
     *           See the {@see \Google\ApiCore\Transport\GrpcTransport::build()} and
     *           {@see \Google\ApiCore\Transport\RestTransport::build()} methods for the
     *           supported options.
     *     @type callable $clientCertSource
     *           A callable which returns the client cert as a string. This can be used to
     *           provide a certificate and private key to the transport layer for mTLS.
     * }
     *
     * @throws ValidationException
     */
    public function __construct(array $options = [])
    {
        $clientOptions = $this->buildClientOptions($options);
        $this->setClientOptions($clientOptions);
    }

    /** Handles execution of the async variants for each documented method. */
    public function __call($method, $args)
    {
        if (substr($method, -5) !== 'Async') {
            trigger_error('Call to undefined method ' . __CLASS__ . "::$method()", E_USER_ERROR);
        }

        array_unshift($args, substr($method, 0, -5));
        return call_user_func_array([$this, 'startAsyncCall'], $args);
    }

    /**
     * Creates new notes in batch.
     *
     * The async variant is {@see GrafeasClient::batchCreateNotesAsync()} .
     *
     * @example samples/V1/GrafeasClient/batch_create_notes.php
     *
     * @param BatchCreateNotesRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return BatchCreateNotesResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchCreateNotes(BatchCreateNotesRequest $request, array $callOptions = []): BatchCreateNotesResponse
    {
        return $this->startApiCall('BatchCreateNotes', $request, $callOptions)->wait();
    }

    /**
     * Creates new occurrences in batch.
     *
     * The async variant is {@see GrafeasClient::batchCreateOccurrencesAsync()} .
     *
     * @example samples/V1/GrafeasClient/batch_create_occurrences.php
     *
     * @param BatchCreateOccurrencesRequest $request     A request to house fields associated with the call.
     * @param array                         $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return BatchCreateOccurrencesResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function batchCreateOccurrences(BatchCreateOccurrencesRequest $request, array $callOptions = []): BatchCreateOccurrencesResponse
    {
        return $this->startApiCall('BatchCreateOccurrences', $request, $callOptions)->wait();
    }

    /**
     * Creates a new note.
     *
     * The async variant is {@see GrafeasClient::createNoteAsync()} .
     *
     * @example samples/V1/GrafeasClient/create_note.php
     *
     * @param CreateNoteRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Note
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createNote(CreateNoteRequest $request, array $callOptions = []): Note
    {
        return $this->startApiCall('CreateNote', $request, $callOptions)->wait();
    }

    /**
     * Creates a new occurrence.
     *
     * The async variant is {@see GrafeasClient::createOccurrenceAsync()} .
     *
     * @example samples/V1/GrafeasClient/create_occurrence.php
     *
     * @param CreateOccurrenceRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Occurrence
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function createOccurrence(CreateOccurrenceRequest $request, array $callOptions = []): Occurrence
    {
        return $this->startApiCall('CreateOccurrence', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified note.
     *
     * The async variant is {@see GrafeasClient::deleteNoteAsync()} .
     *
     * @example samples/V1/GrafeasClient/delete_note.php
     *
     * @param DeleteNoteRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteNote(DeleteNoteRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteNote', $request, $callOptions)->wait();
    }

    /**
     * Deletes the specified occurrence. For example, use this method to delete an
     * occurrence when the occurrence is no longer applicable for the given
     * resource.
     *
     * The async variant is {@see GrafeasClient::deleteOccurrenceAsync()} .
     *
     * @example samples/V1/GrafeasClient/delete_occurrence.php
     *
     * @param DeleteOccurrenceRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function deleteOccurrence(DeleteOccurrenceRequest $request, array $callOptions = []): void
    {
        $this->startApiCall('DeleteOccurrence', $request, $callOptions)->wait();
    }

    /**
     * Gets the specified note.
     *
     * The async variant is {@see GrafeasClient::getNoteAsync()} .
     *
     * @example samples/V1/GrafeasClient/get_note.php
     *
     * @param GetNoteRequest $request     A request to house fields associated with the call.
     * @param array          $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Note
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getNote(GetNoteRequest $request, array $callOptions = []): Note
    {
        return $this->startApiCall('GetNote', $request, $callOptions)->wait();
    }

    /**
     * Gets the specified occurrence.
     *
     * The async variant is {@see GrafeasClient::getOccurrenceAsync()} .
     *
     * @example samples/V1/GrafeasClient/get_occurrence.php
     *
     * @param GetOccurrenceRequest $request     A request to house fields associated with the call.
     * @param array                $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Occurrence
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getOccurrence(GetOccurrenceRequest $request, array $callOptions = []): Occurrence
    {
        return $this->startApiCall('GetOccurrence', $request, $callOptions)->wait();
    }

    /**
     * Gets the note attached to the specified occurrence. Consumer projects can
     * use this method to get a note that belongs to a provider project.
     *
     * The async variant is {@see GrafeasClient::getOccurrenceNoteAsync()} .
     *
     * @example samples/V1/GrafeasClient/get_occurrence_note.php
     *
     * @param GetOccurrenceNoteRequest $request     A request to house fields associated with the call.
     * @param array                    $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Note
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function getOccurrenceNote(GetOccurrenceNoteRequest $request, array $callOptions = []): Note
    {
        return $this->startApiCall('GetOccurrenceNote', $request, $callOptions)->wait();
    }

    /**
     * Lists occurrences referencing the specified note. Provider projects can use
     * this method to get all occurrences across consumer projects referencing the
     * specified note.
     *
     * The async variant is {@see GrafeasClient::listNoteOccurrencesAsync()} .
     *
     * @example samples/V1/GrafeasClient/list_note_occurrences.php
     *
     * @param ListNoteOccurrencesRequest $request     A request to house fields associated with the call.
     * @param array                      $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listNoteOccurrences(ListNoteOccurrencesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListNoteOccurrences', $request, $callOptions);
    }

    /**
     * Lists notes for the specified project.
     *
     * The async variant is {@see GrafeasClient::listNotesAsync()} .
     *
     * @example samples/V1/GrafeasClient/list_notes.php
     *
     * @param ListNotesRequest $request     A request to house fields associated with the call.
     * @param array            $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listNotes(ListNotesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListNotes', $request, $callOptions);
    }

    /**
     * Lists occurrences for the specified project.
     *
     * The async variant is {@see GrafeasClient::listOccurrencesAsync()} .
     *
     * @example samples/V1/GrafeasClient/list_occurrences.php
     *
     * @param ListOccurrencesRequest $request     A request to house fields associated with the call.
     * @param array                  $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return PagedListResponse
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function listOccurrences(ListOccurrencesRequest $request, array $callOptions = []): PagedListResponse
    {
        return $this->startApiCall('ListOccurrences', $request, $callOptions);
    }

    /**
     * Updates the specified note.
     *
     * The async variant is {@see GrafeasClient::updateNoteAsync()} .
     *
     * @example samples/V1/GrafeasClient/update_note.php
     *
     * @param UpdateNoteRequest $request     A request to house fields associated with the call.
     * @param array             $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Note
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateNote(UpdateNoteRequest $request, array $callOptions = []): Note
    {
        return $this->startApiCall('UpdateNote', $request, $callOptions)->wait();
    }

    /**
     * Updates the specified occurrence.
     *
     * The async variant is {@see GrafeasClient::updateOccurrenceAsync()} .
     *
     * @example samples/V1/GrafeasClient/update_occurrence.php
     *
     * @param UpdateOccurrenceRequest $request     A request to house fields associated with the call.
     * @param array                   $callOptions {
     *     Optional.
     *
     *     @type RetrySettings|array $retrySettings
     *           Retry settings to use for this call. Can be a {@see RetrySettings} object, or an
     *           associative array of retry settings parameters. See the documentation on
     *           {@see RetrySettings} for example usage.
     * }
     *
     * @return Occurrence
     *
     * @throws ApiException Thrown if the API call fails.
     */
    public function updateOccurrence(UpdateOccurrenceRequest $request, array $callOptions = []): Occurrence
    {
        return $this->startApiCall('UpdateOccurrence', $request, $callOptions)->wait();
    }
}
