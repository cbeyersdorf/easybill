<?php
/**
 * LoginsApi
 * PHP version 7.4
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * easybill REST API
 *
 * The first version of the easybill REST API. [CHANGELOG](https://api.easybill.de/rest/v1/CHANGELOG.md)  ## Authentication  You can choose between two available methods: `Basic Auth` or `Bearer Token`.  In each HTTP request, one of the following HTTP headers is required:  ``` # Basic Auth Authorization: Basic base64_encode('<email>:<api_key>') # Bearer Token Authorization: Bearer <api_key> ```  ## Limitations  ### Request Limit  * PLUS: 10 requests per minute * BUSINESS: 60 requests per minute  If the limit is exceeded, you will receive the HTTP error: `429 Too Many Requests`  ### Result Limit  All result lists are limited to 100 by default. This limit can be increased by the query parameter `limit` to a maximum of 1000.  ## Query filter  Many list resources can be filtered. In `/documents` you can filter e.g. by number with `/documents?number=111028654`. If you want to filter multiple numbers, you can either enter them separated by commas `/documents?number=111028654,222006895` or as an array `/documents?number[]=111028654&number[]=222006895`.  **Warning**: The maximum size of an HTTP request line in bytes is 4094. If this limit is exceeded, you will receive the HTTP error: `414 Request-URI Too Large`  ### Escape commas in query  You can escape commans in query `name=Patrick\\, Peter` if you submit the header `X-Easybill-Escape: true` in your request.  ## Property login_id  This is the login of your admin or employee account.  ## Date and Date-Time format Please use the timezone `Europe/Berlin`. * **date** = *Y-m-d* = `2016-12-31` * **date-time** = *Y-m-d H:i:s* = `2016-12-31 03:13:37`  Date or datetime can be `null` because the attributes have been added later and the entry is older.
 *
 * The version of the OpenAPI document: 1.91.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace cbeyersdorf\easybill\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use cbeyersdorf\easybill\ApiException;
use cbeyersdorf\easybill\Configuration;
use cbeyersdorf\easybill\HeaderSelector;
use cbeyersdorf\easybill\ObjectSerializer;

/**
 * LoginsApi Class Doc Comment
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class LoginsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /** @var string[] $contentTypes **/
    public const contentTypes = [
        'loginsGet' => [
            'application/json',
        ],
        'loginsIdGet' => [
            'application/json',
        ],
    ];

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation loginsGet
     *
     * @param  int $limit Limited the result. Default is 100. Maximum can be 1000. (optional)
     * @param  int $page Set current Page. Default is 1. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginsGet'] to see the possible values for this operation
     *
     * @throws \cbeyersdorf\easybill\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \cbeyersdorf\easybill\Model\Logins
     */
    public function loginsGet($limit = null, $page = null, string $contentType = self::contentTypes['loginsGet'][0])
    {
        list($response) = $this->loginsGetWithHttpInfo($limit, $page, $contentType);
        return $response;
    }

    /**
     * Operation loginsGetWithHttpInfo
     *
     * @param  int $limit Limited the result. Default is 100. Maximum can be 1000. (optional)
     * @param  int $page Set current Page. Default is 1. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginsGet'] to see the possible values for this operation
     *
     * @throws \cbeyersdorf\easybill\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \cbeyersdorf\easybill\Model\Logins, HTTP status code, HTTP response headers (array of strings)
     */
    public function loginsGetWithHttpInfo($limit = null, $page = null, string $contentType = self::contentTypes['loginsGet'][0])
    {
        $request = $this->loginsGetRequest($limit, $page, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\cbeyersdorf\easybill\Model\Logins' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\cbeyersdorf\easybill\Model\Logins' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\cbeyersdorf\easybill\Model\Logins', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\cbeyersdorf\easybill\Model\Logins';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\cbeyersdorf\easybill\Model\Logins',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation loginsGetAsync
     *
     * @param  int $limit Limited the result. Default is 100. Maximum can be 1000. (optional)
     * @param  int $page Set current Page. Default is 1. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loginsGetAsync($limit = null, $page = null, string $contentType = self::contentTypes['loginsGet'][0])
    {
        return $this->loginsGetAsyncWithHttpInfo($limit, $page, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation loginsGetAsyncWithHttpInfo
     *
     * @param  int $limit Limited the result. Default is 100. Maximum can be 1000. (optional)
     * @param  int $page Set current Page. Default is 1. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loginsGetAsyncWithHttpInfo($limit = null, $page = null, string $contentType = self::contentTypes['loginsGet'][0])
    {
        $returnType = '\cbeyersdorf\easybill\Model\Logins';
        $request = $this->loginsGetRequest($limit, $page, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'loginsGet'
     *
     * @param  int $limit Limited the result. Default is 100. Maximum can be 1000. (optional)
     * @param  int $page Set current Page. Default is 1. (optional)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginsGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function loginsGetRequest($limit = null, $page = null, string $contentType = self::contentTypes['loginsGet'][0])
    {

        if ($limit !== null && $limit > 1000) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling LoginsApi.loginsGet, must be smaller than or equal to 1000.');
        }
        if ($limit !== null && $limit < 1) {
            throw new \InvalidArgumentException('invalid value for "$limit" when calling LoginsApi.loginsGet, must be bigger than or equal to 1.');
        }
        
        if ($page !== null && $page < 1) {
            throw new \InvalidArgumentException('invalid value for "$page" when calling LoginsApi.loginsGet, must be bigger than or equal to 1.');
        }
        

        $resourcePath = '/logins';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $page,
            'page', // param base name
            'integer', // openApiType
            '', // style
            false, // explode
            false // required
        ) ?? []);




        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation loginsIdGet
     *
     * @param  int $id ID of the login that needs to be fetched (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginsIdGet'] to see the possible values for this operation
     *
     * @throws \cbeyersdorf\easybill\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return \cbeyersdorf\easybill\Model\Login
     */
    public function loginsIdGet($id, string $contentType = self::contentTypes['loginsIdGet'][0])
    {
        list($response) = $this->loginsIdGetWithHttpInfo($id, $contentType);
        return $response;
    }

    /**
     * Operation loginsIdGetWithHttpInfo
     *
     * @param  int $id ID of the login that needs to be fetched (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginsIdGet'] to see the possible values for this operation
     *
     * @throws \cbeyersdorf\easybill\ApiException on non-2xx response or if the response body is not in the expected format
     * @throws \InvalidArgumentException
     * @return array of \cbeyersdorf\easybill\Model\Login, HTTP status code, HTTP response headers (array of strings)
     */
    public function loginsIdGetWithHttpInfo($id, string $contentType = self::contentTypes['loginsIdGet'][0])
    {
        $request = $this->loginsIdGetRequest($id, $contentType);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            switch($statusCode) {
                case 200:
                    if ('\cbeyersdorf\easybill\Model\Login' === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ('\cbeyersdorf\easybill\Model\Login' !== 'string') {
                            try {
                                $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                            } catch (\JsonException $exception) {
                                throw new ApiException(
                                    sprintf(
                                        'Error JSON decoding server response (%s)',
                                        $request->getUri()
                                    ),
                                    $statusCode,
                                    $response->getHeaders(),
                                    $content
                                );
                            }
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\cbeyersdorf\easybill\Model\Login', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\cbeyersdorf\easybill\Model\Login';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
                if ($returnType !== 'string') {
                    try {
                        $content = json_decode($content, false, 512, JSON_THROW_ON_ERROR);
                    } catch (\JsonException $exception) {
                        throw new ApiException(
                            sprintf(
                                'Error JSON decoding server response (%s)',
                                $request->getUri()
                            ),
                            $statusCode,
                            $response->getHeaders(),
                            $content
                        );
                    }
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\cbeyersdorf\easybill\Model\Login',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation loginsIdGetAsync
     *
     * @param  int $id ID of the login that needs to be fetched (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginsIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loginsIdGetAsync($id, string $contentType = self::contentTypes['loginsIdGet'][0])
    {
        return $this->loginsIdGetAsyncWithHttpInfo($id, $contentType)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation loginsIdGetAsyncWithHttpInfo
     *
     * @param  int $id ID of the login that needs to be fetched (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginsIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function loginsIdGetAsyncWithHttpInfo($id, string $contentType = self::contentTypes['loginsIdGet'][0])
    {
        $returnType = '\cbeyersdorf\easybill\Model\Login';
        $request = $this->loginsIdGetRequest($id, $contentType);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'loginsIdGet'
     *
     * @param  int $id ID of the login that needs to be fetched (required)
     * @param  string $contentType The value for the Content-Type header. Check self::contentTypes['loginsIdGet'] to see the possible values for this operation
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function loginsIdGetRequest($id, string $contentType = self::contentTypes['loginsIdGet'][0])
    {

        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling loginsIdGet'
            );
        }


        $resourcePath = '/logins/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }


        $headers = $this->headerSelector->selectHeaders(
            ['application/json', ],
            $contentType,
            $multipart
        );

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif (stripos($headers['Content-Type'], 'application/json') !== false) {
                # if Content-Type contains "application/json", json_encode the form parameters
                $httpBody = \GuzzleHttp\Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
        }
        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('Authorization');
        if ($apiKey !== null) {
            $headers['Authorization'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $operationHost = $this->config->getHost();
        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $operationHost . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
