<?php
/**
 * MultipushfundspostResponse
 *
 * PHP version 5
 *
 * @category Class
 * @package  ft_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Funds Transfer API
 *
 * The Funds Transfer API can pull funds from the sender&apos;s Visa account (in preparation for pushing funds to a recipient&apos;s account) in an Account Funding Transaction (AFT).  Additionally, the Funds Transfer API also provides functionality to push funds to the recipient&apos;s Visa account in an Original Credit Transaction (OCT).  If a transaction is declined, the Funds Transfer API can also return the funds to the sender&apos;s funding source in an Account Funding Transaction Reversal (AFTR). The API has been enhanced to allow originators to send their PushFundsTransactions(OCTs) and PullFundsTransactions(AFTs) to Visa for routing to multiple U.S. debit networks.
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

namespace ft_100\model;

use \ArrayAccess;

/**
 * MultipushfundspostResponse Class Doc Comment
 *
 * @category    Class
 * @description Multi Push Funds Transfer Response
 * @package     ft_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MultipushfundspostResponse implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'multipushfundspostResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'network_id' => 'int',
        'merchant_verification_value' => 'string',
        'status_identifier' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'network_id' => 'networkId',
        'merchant_verification_value' => 'merchantVerificationValue',
        'status_identifier' => 'statusIdentifier'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'network_id' => 'setNetworkId',
        'merchant_verification_value' => 'setMerchantVerificationValue',
        'status_identifier' => 'setStatusIdentifier'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'network_id' => 'getNetworkId',
        'merchant_verification_value' => 'getMerchantVerificationValue',
        'status_identifier' => 'getStatusIdentifier'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['network_id'] = isset($data['network_id']) ? $data['network_id'] : null;
        $this->container['merchant_verification_value'] = isset($data['merchant_verification_value']) ? $data['merchant_verification_value'] : null;
        $this->container['status_identifier'] = isset($data['status_identifier']) ? $data['status_identifier'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['status_identifier'] === null) {
            $invalid_properties[] = "'status_identifier' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['status_identifier'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets network_id
     * @return int
     */
    public function getNetworkId()
    {
        return $this->container['network_id'];
    }

    /**
     * Sets network_id
     * @param int $network_id This contains a code that identifies the network on which the transaction was processed.<br><br>Refer to <a href=\"/request_response_codes#network_id_and_sharing_group_code\">Network ID</a><br><br><b>Note:</b><br>This field is returned only if it is anything other than networkId value 2.<br><br>Supported only in US for domestic transactions.
     * @return $this
     */
    public function setNetworkId($network_id)
    {
        $this->container['network_id'] = $network_id;

        return $this;
    }

    /**
     * Gets merchant_verification_value
     * @return string
     */
    public function getMerchantVerificationValue()
    {
        return $this->container['merchant_verification_value'];
    }

    /**
     * Sets merchant_verification_value
     * @param string $merchant_verification_value The concatenated Merchant Verification Value of Visa assigned and Acquirer assigned value is returned.
     * @return $this
     */
    public function setMerchantVerificationValue($merchant_verification_value)
    {
        $this->container['merchant_verification_value'] = $merchant_verification_value;

        return $this;
    }

    /**
     * Gets status_identifier
     * @return string
     */
    public function getStatusIdentifier()
    {
        return $this->container['status_identifier'];
    }

    /**
     * Sets status_identifier
     * @param string $status_identifier 
     * @return $this
     */
    public function setStatusIdentifier($status_identifier)
    {
        $this->container['status_identifier'] = $status_identifier;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ft_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ft_100\ObjectSerializer::sanitizeForSerialization($this));
    }
}

/**
* ----------------------------------------------------------------------------------------------------------------------
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
* ----------------------------------------------------------------------------------------------------------------------
*/