<?php
/**
 * OfferApi
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\Merchant\ApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use ChannelEngine\Merchant\ApiClient\ApiException;
use ChannelEngine\Merchant\ApiClient\Configuration;
use ChannelEngine\Merchant\ApiClient\HeaderSelector;
use ChannelEngine\Merchant\ApiClient\ObjectSerializer;

/**
 * OfferApi Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\Merchant\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OfferApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation offerGetStock
     *
     * Get stock for products
     *
     * @param  string[] $skus List of your products&#39; sku&#39;s (required)
     * @param  int[] $stockLocationIds The ChannelEngine id of the stock location(s) (required)
     *
     * @throws \ChannelEngine\Merchant\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse
     */
    public function offerGetStock($skus, $stockLocationIds)
    {
        list($response) = $this->offerGetStockWithHttpInfo($skus, $stockLocationIds);
        return $response;
    }

    /**
     * Operation offerGetStockWithHttpInfo
     *
     * Get stock for products
     *
     * @param  string[] $skus List of your products&#39; sku&#39;s (required)
     * @param  int[] $stockLocationIds The ChannelEngine id of the stock location(s) (required)
     *
     * @throws \ChannelEngine\Merchant\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function offerGetStockWithHttpInfo($skus, $stockLocationIds)
    {
        $returnType = '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse';
        $request = $this->offerGetStockRequest($skus, $stockLocationIds);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
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
                        '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation offerGetStockAsync
     *
     * Get stock for products
     *
     * @param  string[] $skus List of your products&#39; sku&#39;s (required)
     * @param  int[] $stockLocationIds The ChannelEngine id of the stock location(s) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerGetStockAsync($skus, $stockLocationIds)
    {
        return $this->offerGetStockAsyncWithHttpInfo($skus, $stockLocationIds)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation offerGetStockAsyncWithHttpInfo
     *
     * Get stock for products
     *
     * @param  string[] $skus List of your products&#39; sku&#39;s (required)
     * @param  int[] $stockLocationIds The ChannelEngine id of the stock location(s) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerGetStockAsyncWithHttpInfo($skus, $stockLocationIds)
    {
        $returnType = '\ChannelEngine\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse';
        $request = $this->offerGetStockRequest($skus, $stockLocationIds);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'offerGetStock'
     *
     * @param  string[] $skus List of your products&#39; sku&#39;s (required)
     * @param  int[] $stockLocationIds The ChannelEngine id of the stock location(s) (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function offerGetStockRequest($skus, $stockLocationIds)
    {
        // verify the required parameter 'skus' is set
        if ($skus === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $skus when calling offerGetStock'
            );
        }
        // verify the required parameter 'stockLocationIds' is set
        if ($stockLocationIds === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $stockLocationIds when calling offerGetStock'
            );
        }

        $resourcePath = '/v2/offer/stock';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($skus)) {
            $queryParams['skus'] = $skus;
        } else
        if ($skus !== null) {
            $queryParams['skus'] = ObjectSerializer::toQueryValue($skus);
        }
        // query params
        if (is_array($stockLocationIds)) {
            $queryParams['stockLocationIds'] = $stockLocationIds;
        } else
        if ($stockLocationIds !== null) {
            $queryParams['stockLocationIds'] = ObjectSerializer::toQueryValue($stockLocationIds);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $queryParams['apikey'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation offerStockPriceUpdate
     *
     * Update stock or price.
     *
     * @param  \ChannelEngine\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest[] $updates References to the products that should be updated, and the new values  for the stock or price fields. It is possible to supply only one of the two fields  or both. (required)
     *
     * @throws \ChannelEngine\Merchant\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \ChannelEngine\Merchant\ApiClient\Model\SingleOfDictionary2
     */
    public function offerStockPriceUpdate($updates)
    {
        list($response) = $this->offerStockPriceUpdateWithHttpInfo($updates);
        return $response;
    }

    /**
     * Operation offerStockPriceUpdateWithHttpInfo
     *
     * Update stock or price.
     *
     * @param  \ChannelEngine\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest[] $updates References to the products that should be updated, and the new values  for the stock or price fields. It is possible to supply only one of the two fields  or both. (required)
     *
     * @throws \ChannelEngine\Merchant\ApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \ChannelEngine\Merchant\ApiClient\Model\SingleOfDictionary2, HTTP status code, HTTP response headers (array of strings)
     */
    public function offerStockPriceUpdateWithHttpInfo($updates)
    {
        $returnType = '\ChannelEngine\Merchant\ApiClient\Model\SingleOfDictionary2';
        $request = $this->offerStockPriceUpdateRequest($updates);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
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
                        '\ChannelEngine\Merchant\ApiClient\Model\SingleOfDictionary2',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation offerStockPriceUpdateAsync
     *
     * Update stock or price.
     *
     * @param  \ChannelEngine\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest[] $updates References to the products that should be updated, and the new values  for the stock or price fields. It is possible to supply only one of the two fields  or both. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerStockPriceUpdateAsync($updates)
    {
        return $this->offerStockPriceUpdateAsyncWithHttpInfo($updates)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation offerStockPriceUpdateAsyncWithHttpInfo
     *
     * Update stock or price.
     *
     * @param  \ChannelEngine\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest[] $updates References to the products that should be updated, and the new values  for the stock or price fields. It is possible to supply only one of the two fields  or both. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function offerStockPriceUpdateAsyncWithHttpInfo($updates)
    {
        $returnType = '\ChannelEngine\Merchant\ApiClient\Model\SingleOfDictionary2';
        $request = $this->offerStockPriceUpdateRequest($updates);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'offerStockPriceUpdate'
     *
     * @param  \ChannelEngine\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest[] $updates References to the products that should be updated, and the new values  for the stock or price fields. It is possible to supply only one of the two fields  or both. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function offerStockPriceUpdateRequest($updates)
    {
        // verify the required parameter 'updates' is set
        if ($updates === null) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $updates when calling offerStockPriceUpdate'
            );
        }

        $resourcePath = '/v2/offer';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($updates)) {
            $_tempBody = $updates;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('apikey');
        if ($apiKey !== null) {
            $queryParams['apikey'] = $apiKey;
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'PUT',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
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
