<?php
/**
 * MerchandiseReturnReversalPostpostPayload
 *
 * PHP version 5
 *
 * @category Class
 * @package  mvrf_100
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * mVisa Refund API
 *
 * Refund API is only applicable if the merchant has accepted payment using mVisa at the time of original purchase. Consumers provides their PAN number associated with initial purchase transaction to merchant, which is used via the merchant device to instruct full or partial amount to be returned to the consumer.
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

namespace mvrf_100\model;

use \ArrayAccess;

/**
 * MerchandiseReturnReversalPostpostPayload Class Doc Comment
 *
 * @category    Class
 * @description Request body for creating in merchandise return reversal
 * @package     mvrf_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MerchandiseReturnReversalPostpostPayload implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'merchandiseReturnReversalPostpostPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'local_transaction_date_time' => 'string',
        'recipient_primary_account_number' => 'string',
        'fee_program_indicator' => 'string',
        'transaction_fee_amt' => 'string',
        'acquirer_country_code' => 'string',
        'transaction_identifier' => 'string',
        'amount' => 'string',
        'original_data_elements' => '\mvrf_100\model\OriginalDataElements',
        'card_acceptor' => '\mvrf_100\model\CardAcceptor',
        'acquiring_bin' => 'string',
        'retrieval_reference_number' => 'string',
        'systems_trace_audit_number' => 'string',
        'sender_currency_code' => 'string',
        'merchant_verification_value' => '\mvrf_100\model\MerchantVerificationValue'
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
        'local_transaction_date_time' => 'localTransactionDateTime',
        'recipient_primary_account_number' => 'recipientPrimaryAccountNumber',
        'fee_program_indicator' => 'feeProgramIndicator',
        'transaction_fee_amt' => 'transactionFeeAmt',
        'acquirer_country_code' => 'acquirerCountryCode',
        'transaction_identifier' => 'transactionIdentifier',
        'amount' => 'amount',
        'original_data_elements' => 'originalDataElements',
        'card_acceptor' => 'cardAcceptor',
        'acquiring_bin' => 'acquiringBin',
        'retrieval_reference_number' => 'retrievalReferenceNumber',
        'systems_trace_audit_number' => 'systemsTraceAuditNumber',
        'sender_currency_code' => 'senderCurrencyCode',
        'merchant_verification_value' => 'merchantVerificationValue'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'local_transaction_date_time' => 'setLocalTransactionDateTime',
        'recipient_primary_account_number' => 'setRecipientPrimaryAccountNumber',
        'fee_program_indicator' => 'setFeeProgramIndicator',
        'transaction_fee_amt' => 'setTransactionFeeAmt',
        'acquirer_country_code' => 'setAcquirerCountryCode',
        'transaction_identifier' => 'setTransactionIdentifier',
        'amount' => 'setAmount',
        'original_data_elements' => 'setOriginalDataElements',
        'card_acceptor' => 'setCardAcceptor',
        'acquiring_bin' => 'setAcquiringBin',
        'retrieval_reference_number' => 'setRetrievalReferenceNumber',
        'systems_trace_audit_number' => 'setSystemsTraceAuditNumber',
        'sender_currency_code' => 'setSenderCurrencyCode',
        'merchant_verification_value' => 'setMerchantVerificationValue'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'local_transaction_date_time' => 'getLocalTransactionDateTime',
        'recipient_primary_account_number' => 'getRecipientPrimaryAccountNumber',
        'fee_program_indicator' => 'getFeeProgramIndicator',
        'transaction_fee_amt' => 'getTransactionFeeAmt',
        'acquirer_country_code' => 'getAcquirerCountryCode',
        'transaction_identifier' => 'getTransactionIdentifier',
        'amount' => 'getAmount',
        'original_data_elements' => 'getOriginalDataElements',
        'card_acceptor' => 'getCardAcceptor',
        'acquiring_bin' => 'getAcquiringBin',
        'retrieval_reference_number' => 'getRetrievalReferenceNumber',
        'systems_trace_audit_number' => 'getSystemsTraceAuditNumber',
        'sender_currency_code' => 'getSenderCurrencyCode',
        'merchant_verification_value' => 'getMerchantVerificationValue'
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
        $this->container['local_transaction_date_time'] = isset($data['local_transaction_date_time']) ? $data['local_transaction_date_time'] : null;
        $this->container['recipient_primary_account_number'] = isset($data['recipient_primary_account_number']) ? $data['recipient_primary_account_number'] : null;
        $this->container['fee_program_indicator'] = isset($data['fee_program_indicator']) ? $data['fee_program_indicator'] : null;
        $this->container['transaction_fee_amt'] = isset($data['transaction_fee_amt']) ? $data['transaction_fee_amt'] : null;
        $this->container['acquirer_country_code'] = isset($data['acquirer_country_code']) ? $data['acquirer_country_code'] : null;
        $this->container['transaction_identifier'] = isset($data['transaction_identifier']) ? $data['transaction_identifier'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['original_data_elements'] = isset($data['original_data_elements']) ? $data['original_data_elements'] : null;
        $this->container['card_acceptor'] = isset($data['card_acceptor']) ? $data['card_acceptor'] : null;
        $this->container['acquiring_bin'] = isset($data['acquiring_bin']) ? $data['acquiring_bin'] : null;
        $this->container['retrieval_reference_number'] = isset($data['retrieval_reference_number']) ? $data['retrieval_reference_number'] : null;
        $this->container['systems_trace_audit_number'] = isset($data['systems_trace_audit_number']) ? $data['systems_trace_audit_number'] : null;
        $this->container['sender_currency_code'] = isset($data['sender_currency_code']) ? $data['sender_currency_code'] : null;
        $this->container['merchant_verification_value'] = isset($data['merchant_verification_value']) ? $data['merchant_verification_value'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['local_transaction_date_time'] === null) {
            $invalid_properties[] = "'local_transaction_date_time' can't be null";
        }
        if ($this->container['recipient_primary_account_number'] === null) {
            $invalid_properties[] = "'recipient_primary_account_number' can't be null";
        }
        if ($this->container['acquirer_country_code'] === null) {
            $invalid_properties[] = "'acquirer_country_code' can't be null";
        }
        if ($this->container['transaction_identifier'] === null) {
            $invalid_properties[] = "'transaction_identifier' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if ($this->container['original_data_elements'] === null) {
            $invalid_properties[] = "'original_data_elements' can't be null";
        }
        if ($this->container['acquiring_bin'] === null) {
            $invalid_properties[] = "'acquiring_bin' can't be null";
        }
        if ($this->container['retrieval_reference_number'] === null) {
            $invalid_properties[] = "'retrieval_reference_number' can't be null";
        }
        if ($this->container['systems_trace_audit_number'] === null) {
            $invalid_properties[] = "'systems_trace_audit_number' can't be null";
        }
        if ($this->container['sender_currency_code'] === null) {
            $invalid_properties[] = "'sender_currency_code' can't be null";
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

        if ($this->container['local_transaction_date_time'] === null) {
            return false;
        }
        if ($this->container['recipient_primary_account_number'] === null) {
            return false;
        }
        if ($this->container['acquirer_country_code'] === null) {
            return false;
        }
        if ($this->container['transaction_identifier'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['original_data_elements'] === null) {
            return false;
        }
        if ($this->container['acquiring_bin'] === null) {
            return false;
        }
        if ($this->container['retrieval_reference_number'] === null) {
            return false;
        }
        if ($this->container['systems_trace_audit_number'] === null) {
            return false;
        }
        if ($this->container['sender_currency_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets local_transaction_date_time
     * @return string
     */
    public function getLocalTransactionDateTime()
    {
        return $this->container['local_transaction_date_time'];
    }

    /**
     * Sets local_transaction_date_time
     * @param string $local_transaction_date_time This should be +/- 3 days from the current date.The date is in yyyy-mm-ddThh:mm:ss format
     * @return $this
     */
    public function setLocalTransactionDateTime($local_transaction_date_time)
    {
        $this->container['local_transaction_date_time'] = $local_transaction_date_time;

        return $this;
    }

    /**
     * Gets recipient_primary_account_number
     * @return string
     */
    public function getRecipientPrimaryAccountNumber()
    {
        return $this->container['recipient_primary_account_number'];
    }

    /**
     * Sets recipient_primary_account_number
     * @param string $recipient_primary_account_number Populate with Consumer PAN used in the refund transaction.
     * @return $this
     */
    public function setRecipientPrimaryAccountNumber($recipient_primary_account_number)
    {
        $this->container['recipient_primary_account_number'] = $recipient_primary_account_number;

        return $this;
    }

    /**
     * Gets fee_program_indicator
     * @return string
     */
    public function getFeeProgramIndicator()
    {
        return $this->container['fee_program_indicator'];
    }

    /**
     * Sets fee_program_indicator
     * @param string $fee_program_indicator Originators can leave this field blank.
     * @return $this
     */
    public function setFeeProgramIndicator($fee_program_indicator)
    {
        $this->container['fee_program_indicator'] = $fee_program_indicator;

        return $this;
    }

    /**
     * Gets transaction_fee_amt
     * @return string
     */
    public function getTransactionFeeAmt()
    {
        return $this->container['transaction_fee_amt'];
    }

    /**
     * Sets transaction_fee_amt
     * @param string $transaction_fee_amt Prefix ‘D’ <br><br>Originators are required to populate convenience fee amount in this field to be returned, if presented in the original refund message.
     * @return $this
     */
    public function setTransactionFeeAmt($transaction_fee_amt)
    {
        $this->container['transaction_fee_amt'] = $transaction_fee_amt;

        return $this;
    }

    /**
     * Gets acquirer_country_code
     * @return string
     */
    public function getAcquirerCountryCode()
    {
        return $this->container['acquirer_country_code'];
    }

    /**
     * Sets acquirer_country_code
     * @param string $acquirer_country_code Use a 3-digit numeric country code for the country. This must match the information provided during program enrollment.<br><br>Refer to <a href=\"/request_response_codes#iso_country_and_currency_codes\">ISO Codes</a>
     * @return $this
     */
    public function setAcquirerCountryCode($acquirer_country_code)
    {
        $this->container['acquirer_country_code'] = $acquirer_country_code;

        return $this;
    }

    /**
     * Gets transaction_identifier
     * @return string
     */
    public function getTransactionIdentifier()
    {
        return $this->container['transaction_identifier'];
    }

    /**
     * Sets transaction_identifier
     * @param string $transaction_identifier This value must match with the VisaNet reference number previously sent in the original refund transaction.
     * @return $this
     */
    public function setTransactionIdentifier($transaction_identifier)
    {
        $this->container['transaction_identifier'] = $transaction_identifier;

        return $this;
    }

    /**
     * Gets amount
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param string $amount The amount must match the original refund transaction.
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets original_data_elements
     * @return \mvrf_100\model\OriginalDataElements
     */
    public function getOriginalDataElements()
    {
        return $this->container['original_data_elements'];
    }

    /**
     * Sets original_data_elements
     * @param \mvrf_100\model\OriginalDataElements $original_data_elements
     * @return $this
     */
    public function setOriginalDataElements($original_data_elements)
    {
        $this->container['original_data_elements'] = $original_data_elements;

        return $this;
    }

    /**
     * Gets card_acceptor
     * @return \mvrf_100\model\CardAcceptor
     */
    public function getCardAcceptor()
    {
        return $this->container['card_acceptor'];
    }

    /**
     * Sets card_acceptor
     * @param \mvrf_100\model\CardAcceptor $card_acceptor
     * @return $this
     */
    public function setCardAcceptor($card_acceptor)
    {
        $this->container['card_acceptor'] = $card_acceptor;

        return $this;
    }

    /**
     * Gets acquiring_bin
     * @return string
     */
    public function getAcquiringBin()
    {
        return $this->container['acquiring_bin'];
    }

    /**
     * Sets acquiring_bin
     * @param string $acquiring_bin This BIN number identifies the originator of refund transaction. This information must match the BIN provided during enrollment.
     * @return $this
     */
    public function setAcquiringBin($acquiring_bin)
    {
        $this->container['acquiring_bin'] = $acquiring_bin;

        return $this;
    }

    /**
     * Gets retrieval_reference_number
     * @return string
     */
    public function getRetrievalReferenceNumber()
    {
        return $this->container['retrieval_reference_number'];
    }

    /**
     * Sets retrieval_reference_number
     * @param string $retrieval_reference_number This value must match the retrievalReferenceNumber previously sent in the original refund transaction.
     * @return $this
     */
    public function setRetrievalReferenceNumber($retrieval_reference_number)
    {
        $this->container['retrieval_reference_number'] = $retrieval_reference_number;

        return $this;
    }

    /**
     * Gets systems_trace_audit_number
     * @return string
     */
    public function getSystemsTraceAuditNumber()
    {
        return $this->container['systems_trace_audit_number'];
    }

    /**
     * Sets systems_trace_audit_number
     * @param string $systems_trace_audit_number This value must match with the systemsTraceAuditNumber previously sent in the original refund transaction.
     * @return $this
     */
    public function setSystemsTraceAuditNumber($systems_trace_audit_number)
    {
        $this->container['systems_trace_audit_number'] = $systems_trace_audit_number;

        return $this;
    }

    /**
     * Gets sender_currency_code
     * @return string
     */
    public function getSenderCurrencyCode()
    {
        return $this->container['sender_currency_code'];
    }

    /**
     * Sets sender_currency_code
     * @param string $sender_currency_code The code in this field must always reflect the currency previously sent in the original refund transaction.
     * @return $this
     */
    public function setSenderCurrencyCode($sender_currency_code)
    {
        $this->container['sender_currency_code'] = $sender_currency_code;

        return $this;
    }

    /**
     * Gets merchant_verification_value
     * @return \mvrf_100\model\MerchantVerificationValue
     */
    public function getMerchantVerificationValue()
    {
        return $this->container['merchant_verification_value'];
    }

    /**
     * Sets merchant_verification_value
     * @param \mvrf_100\model\MerchantVerificationValue $merchant_verification_value
     * @return $this
     */
    public function setMerchantVerificationValue($merchant_verification_value)
    {
        $this->container['merchant_verification_value'] = $merchant_verification_value;

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
            return json_encode(\mvrf_100\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\mvrf_100\ObjectSerializer::sanitizeForSerialization($this));
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