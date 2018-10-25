<?php
/**
 * QueryApi
 * PHP version 5
 *
 * @category Class
 * @package  qury_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Query API
 *
 * The Transaction Query API can be used to determine the processing status of a transaction or to retreive the lifecycle of a transaction. This API can be used to check whether a PullFunds, PushFunds or ReverseFunds transaction processed successfully if received by Visa. This API could also be used to retrieve the detailed lifecycle or history of a transaction (e.g. original transaction, chargeback, chargeback reversal  etc).
 *
 * OpenAPI spec version: v1
 * Contact: 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace qury_100\api;

use \qury_100\ApiClient;
use \qury_100\ApiException;
use \qury_100\Configuration;
use \qury_100\ObjectSerializer;

/**
 * QueryApi Class Doc Comment
 *
 * @category Class
 * @package  qury_100
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueryApi
{
    /**
     * API Client
     *
     * @var \qury_100\ApiClient instance of the ApiClient
     */
    protected $apiClient;

    /**
     * Constructor
     *
     * @param \qury_100\ApiClient|null $apiClient The api client to use
     */
    public function __construct(\qury_100\ApiClient $apiClient = null)
    {
        if ($apiClient === null) {
            $apiClient = new ApiClient();
        }

        $this->apiClient = $apiClient;
    }

    /**
     * Get API client
     *
     * @return \qury_100\ApiClient get the API client
     */
    public function getApiClient()
    {
        return $this->apiClient;
    }

    /**
     * Set the API client
     *
     * @param \qury_100\ApiClient $apiClient set the API client
     *
     * @return QueryApi
     */
    public function setApiClient(\qury_100\ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
        return $this;
    }

    /**
     * Operation gettransactionQuery
     *
     * 
     *
     * @param string $acquiring_bin The Bank Identification Number (BIN) under which the Visa Direct solution is registered. This must match the information provided during enrollment. (required)
     * @param string $stan A number assigned by the message initiator that uniquely identifies a transaction. This is the same as systemsTraceAuditNumber previously sent in the request for the PullFunds, PushFunds or ReverseFunds transaction API calls. (optional)
     * @param string $rrn A value used to tie together service calls related to a single financial transaction. This is the same as retrievalReferenceNumber previously sent in the request for PullFunds, PushFunds or ReverseFunds transaction API calls. (optional)
     * @param string $transaction_identifier The VisaNet reference number for the transaction. This is the same transactionIdentifier previously received in the response for PullFunds, PushFunds or ReverseFunds transaction API calls. (optional)
     * @param string $caid An identifier for the card acceptor. This is the same as cardAcceptor.idCode previously sent in the request for PullFunds, PushFunds or ReverseFunds transaction API calls. (optional)
     * @param string $transaction_start_date The start date for querying the transaction. Can be in previous 120 day range including today&#39;s date. Start date cannot be later than End date. (optional)
     * @param string $transaction_end_date The end date for querying the transacton. Can be in previous 120 day range including today&#39;s date. (optional)
     * @param string $fields Comma separated list of additional fields requestor would like in response e.g. transactionAmount,responseCode &lt;br/&gt; Note: &lt;br/&gt; If no fields parameter is specified, then following fields are returned by default in the response &lt;br/&gt; 1) statusCode &lt;br/&gt; 2) acquiringBin &lt;br/&gt; 3) transactionIdentifier &lt;br/&gt; 4) transactionType &lt;br/&gt; 5) retrievalReferenceNumber &lt;br/&gt; 6) systemsTraceAuditNumber &lt;br/&gt; 7) transactionDate &lt;br/&gt; 8) transactionTime (optional)
     * @param string $limit Number of records to return, if there are multiple records. Useful for pagination. e.g. if there are 29 records, limit&#x3D;10 returns 10 records at a time &lt;br/&gt; &lt;b&gt;Note:&lt;/b&gt; &lt;br/&gt; 1) If no limit parameter is specified, then max of 10 records will be returned by default. &lt;br/&gt; 2) A header value x-pagination&#x3D;true will be returned if there are more than 10 records, so that you can query with offset and limit parameters to get the next set of records. (optional)
     * @param string $offset Starting record number, from where to return records. Useful for pagination. e.g. if offset &#x3D;11 and limit &#x3D;10, then records 11 thru 20 will be returned. (optional)
     * @throws \qury_100\ApiException on non-2xx response
     * @return \qury_100\model\TransactionQuerygetResponse
     */
    public function gettransactionQuery($acquiring_bin, $stan = null, $rrn = null, $transaction_identifier = null, $caid = null, $transaction_start_date = null, $transaction_end_date = null, $fields = null, $limit = null, $offset = null)
    {
        list($response) = $this->gettransactionQueryWithHttpInfo($acquiring_bin, $stan, $rrn, $transaction_identifier, $caid, $transaction_start_date, $transaction_end_date, $fields, $limit, $offset);
        return $response;
    }

    /**
     * Operation gettransactionQueryWithHttpInfo
     *
     * 
     *
     * @param string $acquiring_bin The Bank Identification Number (BIN) under which the Visa Direct solution is registered. This must match the information provided during enrollment. (required)
     * @param string $stan A number assigned by the message initiator that uniquely identifies a transaction. This is the same as systemsTraceAuditNumber previously sent in the request for the PullFunds, PushFunds or ReverseFunds transaction API calls. (optional)
     * @param string $rrn A value used to tie together service calls related to a single financial transaction. This is the same as retrievalReferenceNumber previously sent in the request for PullFunds, PushFunds or ReverseFunds transaction API calls. (optional)
     * @param string $transaction_identifier The VisaNet reference number for the transaction. This is the same transactionIdentifier previously received in the response for PullFunds, PushFunds or ReverseFunds transaction API calls. (optional)
     * @param string $caid An identifier for the card acceptor. This is the same as cardAcceptor.idCode previously sent in the request for PullFunds, PushFunds or ReverseFunds transaction API calls. (optional)
     * @param string $transaction_start_date The start date for querying the transaction. Can be in previous 120 day range including today&#39;s date. Start date cannot be later than End date. (optional)
     * @param string $transaction_end_date The end date for querying the transacton. Can be in previous 120 day range including today&#39;s date. (optional)
     * @param string $fields Comma separated list of additional fields requestor would like in response e.g. transactionAmount,responseCode &lt;br/&gt; Note: &lt;br/&gt; If no fields parameter is specified, then following fields are returned by default in the response &lt;br/&gt; 1) statusCode &lt;br/&gt; 2) acquiringBin &lt;br/&gt; 3) transactionIdentifier &lt;br/&gt; 4) transactionType &lt;br/&gt; 5) retrievalReferenceNumber &lt;br/&gt; 6) systemsTraceAuditNumber &lt;br/&gt; 7) transactionDate &lt;br/&gt; 8) transactionTime (optional)
     * @param string $limit Number of records to return, if there are multiple records. Useful for pagination. e.g. if there are 29 records, limit&#x3D;10 returns 10 records at a time &lt;br/&gt; &lt;b&gt;Note:&lt;/b&gt; &lt;br/&gt; 1) If no limit parameter is specified, then max of 10 records will be returned by default. &lt;br/&gt; 2) A header value x-pagination&#x3D;true will be returned if there are more than 10 records, so that you can query with offset and limit parameters to get the next set of records. (optional)
     * @param string $offset Starting record number, from where to return records. Useful for pagination. e.g. if offset &#x3D;11 and limit &#x3D;10, then records 11 thru 20 will be returned. (optional)
     * @throws \qury_100\ApiException on non-2xx response
     * @return array of \qury_100\model\TransactionQuerygetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function gettransactionQueryWithHttpInfo($acquiring_bin, $stan = null, $rrn = null, $transaction_identifier = null, $caid = null, $transaction_start_date = null, $transaction_end_date = null, $fields = null, $limit = null, $offset = null)
    {
        // verify the required parameter 'acquiring_bin' is set
        if ($acquiring_bin === null) {
            throw new \InvalidArgumentException('Missing the required parameter $acquiring_bin when calling gettransactionQuery');
        }
        // parse inputs
        $path = "/visadirect/v1/transactionquery";
        $resourcePath = "transactionquery";
        $httpBody = '';
        $queryParams = [];
        $headerParams = [];
        $formParams = [];
        $_header_accept = $this->apiClient->selectHeaderAccept(['application/json']);
        if (!is_null($_header_accept)) {
            $headerParams['Accept'] = $_header_accept;
        }
        $headerParams['Content-Type'] = $this->apiClient->selectHeaderContentType(['application/json']);

        // query params
        if ($acquiring_bin !== null) {
            $queryParams['acquiringBIN'] = $this->apiClient->getSerializer()->toQueryValue($acquiring_bin);
        }
        // query params
        if ($stan !== null) {
            $queryParams['stan'] = $this->apiClient->getSerializer()->toQueryValue($stan);
        }
        // query params
        if ($rrn !== null) {
            $queryParams['rrn'] = $this->apiClient->getSerializer()->toQueryValue($rrn);
        }
        // query params
        if ($transaction_identifier !== null) {
            $queryParams['transactionIdentifier'] = $this->apiClient->getSerializer()->toQueryValue($transaction_identifier);
        }
        // query params
        if ($caid !== null) {
            $queryParams['caid'] = $this->apiClient->getSerializer()->toQueryValue($caid);
        }
        // query params
        if ($transaction_start_date !== null) {
            $queryParams['transactionStartDate'] = $this->apiClient->getSerializer()->toQueryValue($transaction_start_date);
        }
        // query params
        if ($transaction_end_date !== null) {
            $queryParams['transactionEndDate'] = $this->apiClient->getSerializer()->toQueryValue($transaction_end_date);
        }
        // query params
        if ($fields !== null) {
            $queryParams['fields'] = $this->apiClient->getSerializer()->toQueryValue($fields);
        }
        // query params
        if ($limit !== null) {
            $queryParams['limit'] = $this->apiClient->getSerializer()->toQueryValue($limit);
        }
        // query params
        if ($offset !== null) {
            $queryParams['offset'] = $this->apiClient->getSerializer()->toQueryValue($offset);
        }
        // default format to json
        $path = str_replace("{format}", "json", $path);
        $resourcePath = str_replace("{format}", "json", $resourcePath);

        
        // for model (json/xml)
        if (isset($_tempBody)) {
            $httpBody = $_tempBody; // $_tempBody is the method argument, if present
        } elseif (count($formParams) > 0) {
            $httpBody = $formParams; // for HTTP post (form)
        }
        // this endpoint requires HTTP basic authentication
        if (strlen($this->apiClient->getConfig()->getUsername()) !== 0 or strlen($this->apiClient->getConfig()->getPassword()) !== 0) {
            $headerParams['Authorization'] = 'Basic ' . base64_encode($this->apiClient->getConfig()->getUsername() . ":" . $this->apiClient->getConfig()->getPassword());
        }

        if (sizeof($queryParams) !== 0){
            ksort($queryParams);
        }

        // make the API Call
        try {
            list($response, $statusCode, $httpHeader) = $this->apiClient->callApi(
                $path,
                $resourcePath,
                'GET',
                $queryParams,
                $httpBody,
                $headerParams,
                '\qury_100\model\TransactionQuerygetResponse',
                '/visadirect/v1/transactionquery'
            );

            return [$this->apiClient->getSerializer()->deserialize($response, '\qury_100\model\TransactionQuerygetResponse', $httpHeader), $statusCode, $httpHeader];
        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = $this->apiClient->getSerializer()->deserialize($e->getResponseBody(), '\qury_100\model\TransactionQuerygetResponse', $e->getResponseHeaders());
                    $e->setResponseObject($data);
                    break;
            }

            throw $e;
        }
    }
}
/**
* --------------------------------------------------------------------------------
*
* © Copyright 2018 Visa. All Rights Reserved.
*
* NOTICE: The software and accompanying information and documentation (together, the “Software”) remain the property of
* and are proprietary to Visa and its suppliers and affiliates. The Software remains protected by intellectual property
* rights and may be covered by U.S. and foreign patents or patent applications. The Software is licensed and not sold.
*
* By accessing the Software you are agreeing to Visa's terms of use (developer.visa.com/terms) and privacy policy
* (developer.visa.com/privacy). In addition, all permissible uses of the Software must be in support of Visa products,
* programs and services provided through the Visa Developer Program (VDP) platform only (developer.visa.com).
* THE SOFTWARE AND ANY ASSOCIATED INFORMATION OR DOCUMENTATION IS PROVIDED ON AN “AS IS,” “AS AVAILABLE,” “WITH ALL
* FAULTS” BASIS WITHOUT WARRANTY OR CONDITION OF ANY KIND. YOUR USE IS AT YOUR OWN RISK.
* --------------------------------------------------------------------------------
*/