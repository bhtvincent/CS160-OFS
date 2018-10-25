<?php
/**
 * MultireversefundspostPayload
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
 * MultireversefundspostPayload Class Doc Comment
 *
 * @category    Class
 * @description Request body for creating in multi reverse funds transfer
 * @package     ft_100
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class MultireversefundspostPayload implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'multireversefundspostPayload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'business_application_id' => 'string',
        'transaction_identifier' => 'int',
        'card_acceptor' => '\ft_100\model\CardAcceptor',
        'surcharge' => 'string',
        'network_id' => 'int',
        'merchant_verification_value' => '\ft_100\model\MerchantVerificationValue',
        'sharing_group_code' => 'string',
        'acquirer_country_code' => 'int',
        'systems_trace_audit_number' => 'int',
        'original_data_elements' => '\ft_100\model\OriginalDataElements',
        'member_comments' => 'string',
        'national_reimbursement_fee' => 'float',
        'fee_program_indicator' => 'string',
        'retrieval_reference_number' => 'string',
        'acquiring_bin' => 'int',
        'merchant_pseudo_aba_number' => 'string',
        'foreign_exchange_fee_transaction' => 'float',
        'point_of_service_data' => '\ft_100\model\PointOfServiceData',
        'sender_primary_account_number' => 'string',
        'local_transaction_date_time' => 'string',
        'sender_card_expiry_date' => 'string',
        'amount' => 'float',
        'sender_currency_code' => 'string',
        'point_of_service_capability' => '\ft_100\model\PointOfServiceCapability'
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
        'business_application_id' => 'businessApplicationId',
        'transaction_identifier' => 'transactionIdentifier',
        'card_acceptor' => 'cardAcceptor',
        'surcharge' => 'surcharge',
        'network_id' => 'networkId',
        'merchant_verification_value' => 'merchantVerificationValue',
        'sharing_group_code' => 'sharingGroupCode',
        'acquirer_country_code' => 'acquirerCountryCode',
        'systems_trace_audit_number' => 'systemsTraceAuditNumber',
        'original_data_elements' => 'originalDataElements',
        'member_comments' => 'memberComments',
        'national_reimbursement_fee' => 'nationalReimbursementFee',
        'fee_program_indicator' => 'feeProgramIndicator',
        'retrieval_reference_number' => 'retrievalReferenceNumber',
        'acquiring_bin' => 'acquiringBin',
        'merchant_pseudo_aba_number' => 'merchantPseudoAbaNumber',
        'foreign_exchange_fee_transaction' => 'foreignExchangeFeeTransaction',
        'point_of_service_data' => 'pointOfServiceData',
        'sender_primary_account_number' => 'senderPrimaryAccountNumber',
        'local_transaction_date_time' => 'localTransactionDateTime',
        'sender_card_expiry_date' => 'senderCardExpiryDate',
        'amount' => 'amount',
        'sender_currency_code' => 'senderCurrencyCode',
        'point_of_service_capability' => 'pointOfServiceCapability'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'business_application_id' => 'setBusinessApplicationId',
        'transaction_identifier' => 'setTransactionIdentifier',
        'card_acceptor' => 'setCardAcceptor',
        'surcharge' => 'setSurcharge',
        'network_id' => 'setNetworkId',
        'merchant_verification_value' => 'setMerchantVerificationValue',
        'sharing_group_code' => 'setSharingGroupCode',
        'acquirer_country_code' => 'setAcquirerCountryCode',
        'systems_trace_audit_number' => 'setSystemsTraceAuditNumber',
        'original_data_elements' => 'setOriginalDataElements',
        'member_comments' => 'setMemberComments',
        'national_reimbursement_fee' => 'setNationalReimbursementFee',
        'fee_program_indicator' => 'setFeeProgramIndicator',
        'retrieval_reference_number' => 'setRetrievalReferenceNumber',
        'acquiring_bin' => 'setAcquiringBin',
        'merchant_pseudo_aba_number' => 'setMerchantPseudoAbaNumber',
        'foreign_exchange_fee_transaction' => 'setForeignExchangeFeeTransaction',
        'point_of_service_data' => 'setPointOfServiceData',
        'sender_primary_account_number' => 'setSenderPrimaryAccountNumber',
        'local_transaction_date_time' => 'setLocalTransactionDateTime',
        'sender_card_expiry_date' => 'setSenderCardExpiryDate',
        'amount' => 'setAmount',
        'sender_currency_code' => 'setSenderCurrencyCode',
        'point_of_service_capability' => 'setPointOfServiceCapability'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'business_application_id' => 'getBusinessApplicationId',
        'transaction_identifier' => 'getTransactionIdentifier',
        'card_acceptor' => 'getCardAcceptor',
        'surcharge' => 'getSurcharge',
        'network_id' => 'getNetworkId',
        'merchant_verification_value' => 'getMerchantVerificationValue',
        'sharing_group_code' => 'getSharingGroupCode',
        'acquirer_country_code' => 'getAcquirerCountryCode',
        'systems_trace_audit_number' => 'getSystemsTraceAuditNumber',
        'original_data_elements' => 'getOriginalDataElements',
        'member_comments' => 'getMemberComments',
        'national_reimbursement_fee' => 'getNationalReimbursementFee',
        'fee_program_indicator' => 'getFeeProgramIndicator',
        'retrieval_reference_number' => 'getRetrievalReferenceNumber',
        'acquiring_bin' => 'getAcquiringBin',
        'merchant_pseudo_aba_number' => 'getMerchantPseudoAbaNumber',
        'foreign_exchange_fee_transaction' => 'getForeignExchangeFeeTransaction',
        'point_of_service_data' => 'getPointOfServiceData',
        'sender_primary_account_number' => 'getSenderPrimaryAccountNumber',
        'local_transaction_date_time' => 'getLocalTransactionDateTime',
        'sender_card_expiry_date' => 'getSenderCardExpiryDate',
        'amount' => 'getAmount',
        'sender_currency_code' => 'getSenderCurrencyCode',
        'point_of_service_capability' => 'getPointOfServiceCapability'
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
        $this->container['business_application_id'] = isset($data['business_application_id']) ? $data['business_application_id'] : null;
        $this->container['transaction_identifier'] = isset($data['transaction_identifier']) ? $data['transaction_identifier'] : null;
        $this->container['card_acceptor'] = isset($data['card_acceptor']) ? $data['card_acceptor'] : null;
        $this->container['surcharge'] = isset($data['surcharge']) ? $data['surcharge'] : null;
        $this->container['network_id'] = isset($data['network_id']) ? $data['network_id'] : null;
        $this->container['merchant_verification_value'] = isset($data['merchant_verification_value']) ? $data['merchant_verification_value'] : null;
        $this->container['sharing_group_code'] = isset($data['sharing_group_code']) ? $data['sharing_group_code'] : null;
        $this->container['acquirer_country_code'] = isset($data['acquirer_country_code']) ? $data['acquirer_country_code'] : null;
        $this->container['systems_trace_audit_number'] = isset($data['systems_trace_audit_number']) ? $data['systems_trace_audit_number'] : null;
        $this->container['original_data_elements'] = isset($data['original_data_elements']) ? $data['original_data_elements'] : null;
        $this->container['member_comments'] = isset($data['member_comments']) ? $data['member_comments'] : null;
        $this->container['national_reimbursement_fee'] = isset($data['national_reimbursement_fee']) ? $data['national_reimbursement_fee'] : null;
        $this->container['fee_program_indicator'] = isset($data['fee_program_indicator']) ? $data['fee_program_indicator'] : null;
        $this->container['retrieval_reference_number'] = isset($data['retrieval_reference_number']) ? $data['retrieval_reference_number'] : null;
        $this->container['acquiring_bin'] = isset($data['acquiring_bin']) ? $data['acquiring_bin'] : null;
        $this->container['merchant_pseudo_aba_number'] = isset($data['merchant_pseudo_aba_number']) ? $data['merchant_pseudo_aba_number'] : null;
        $this->container['foreign_exchange_fee_transaction'] = isset($data['foreign_exchange_fee_transaction']) ? $data['foreign_exchange_fee_transaction'] : null;
        $this->container['point_of_service_data'] = isset($data['point_of_service_data']) ? $data['point_of_service_data'] : null;
        $this->container['sender_primary_account_number'] = isset($data['sender_primary_account_number']) ? $data['sender_primary_account_number'] : null;
        $this->container['local_transaction_date_time'] = isset($data['local_transaction_date_time']) ? $data['local_transaction_date_time'] : null;
        $this->container['sender_card_expiry_date'] = isset($data['sender_card_expiry_date']) ? $data['sender_card_expiry_date'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['sender_currency_code'] = isset($data['sender_currency_code']) ? $data['sender_currency_code'] : null;
        $this->container['point_of_service_capability'] = isset($data['point_of_service_capability']) ? $data['point_of_service_capability'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['business_application_id'] === null) {
            $invalid_properties[] = "'business_application_id' can't be null";
        }
        if ($this->container['transaction_identifier'] === null) {
            $invalid_properties[] = "'transaction_identifier' can't be null";
        }
        if ($this->container['card_acceptor'] === null) {
            $invalid_properties[] = "'card_acceptor' can't be null";
        }
        if ($this->container['acquirer_country_code'] === null) {
            $invalid_properties[] = "'acquirer_country_code' can't be null";
        }
        if ($this->container['systems_trace_audit_number'] === null) {
            $invalid_properties[] = "'systems_trace_audit_number' can't be null";
        }
        if ($this->container['original_data_elements'] === null) {
            $invalid_properties[] = "'original_data_elements' can't be null";
        }
        if ($this->container['retrieval_reference_number'] === null) {
            $invalid_properties[] = "'retrieval_reference_number' can't be null";
        }
        if ($this->container['acquiring_bin'] === null) {
            $invalid_properties[] = "'acquiring_bin' can't be null";
        }
        if ($this->container['sender_primary_account_number'] === null) {
            $invalid_properties[] = "'sender_primary_account_number' can't be null";
        }
        if ($this->container['local_transaction_date_time'] === null) {
            $invalid_properties[] = "'local_transaction_date_time' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
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

        if ($this->container['business_application_id'] === null) {
            return false;
        }
        if ($this->container['transaction_identifier'] === null) {
            return false;
        }
        if ($this->container['card_acceptor'] === null) {
            return false;
        }
        if ($this->container['acquirer_country_code'] === null) {
            return false;
        }
        if ($this->container['systems_trace_audit_number'] === null) {
            return false;
        }
        if ($this->container['original_data_elements'] === null) {
            return false;
        }
        if ($this->container['retrieval_reference_number'] === null) {
            return false;
        }
        if ($this->container['acquiring_bin'] === null) {
            return false;
        }
        if ($this->container['sender_primary_account_number'] === null) {
            return false;
        }
        if ($this->container['local_transaction_date_time'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['sender_currency_code'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets business_application_id
     * @return string
     */
    public function getBusinessApplicationId()
    {
        return $this->container['business_application_id'];
    }

    /**
     * Sets business_application_id
     * @param string $business_application_id Identifies the programs' business application type for VisaNet transaction processing<br><br>For Money Transfer, AA applies to transactions where the sender and recipient are the same person and PP applies to transactions where the sender and recipient are not the same person.<br><br>Refer to <a href=\"/request_response_codes#business_application_identifier\">businessApplicationId</a> codes
     * @return $this
     */
    public function setBusinessApplicationId($business_application_id)
    {
        $this->container['business_application_id'] = $business_application_id;

        return $this;
    }

    /**
     * Gets transaction_identifier
     * @return int
     */
    public function getTransactionIdentifier()
    {
        return $this->container['transaction_identifier'];
    }

    /**
     * Sets transaction_identifier
     * @param int $transaction_identifier The VisaNet reference number for the transaction. You must use the transactionId from the initial AFT in this field.
     * @return $this
     */
    public function setTransactionIdentifier($transaction_identifier)
    {
        $this->container['transaction_identifier'] = $transaction_identifier;

        return $this;
    }

    /**
     * Gets card_acceptor
     * @return \ft_100\model\CardAcceptor
     */
    public function getCardAcceptor()
    {
        return $this->container['card_acceptor'];
    }

    /**
     * Sets card_acceptor
     * @param \ft_100\model\CardAcceptor $card_acceptor
     * @return $this
     */
    public function setCardAcceptor($card_acceptor)
    {
        $this->container['card_acceptor'] = $card_acceptor;

        return $this;
    }

    /**
     * Gets surcharge
     * @return string
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     * @param string $surcharge When present, this field contains the sender's surcharge as assessed by the originator. Values in this field must be in the same currency and format as defined in the amount field.
     * @return $this
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

        return $this;
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
     * @param int $network_id This contains a code that specifies the network to be used for transmission of the message and determines the program rules that apply to the transaction.<br><br>Refer to <a href=\"/request_response_codes#network_id_and_sharing_group_code\">Network ID</a><br><br><b>Note:</b><br>For ReverseFundsTransactions(AFTR) and MultiReverseFundsTransactions (MULTIAFTR) originators must populate the networkId returned in the original PullFundsTransactions(AFT) and  MultiPullFundsTransactions (MULTIAFT) response.<br> Supported only in US for domestic transactions.
     * @return $this
     */
    public function setNetworkId($network_id)
    {
        $this->container['network_id'] = $network_id;

        return $this;
    }

    /**
     * Gets merchant_verification_value
     * @return \ft_100\model\MerchantVerificationValue
     */
    public function getMerchantVerificationValue()
    {
        return $this->container['merchant_verification_value'];
    }

    /**
     * Sets merchant_verification_value
     * @param \ft_100\model\MerchantVerificationValue $merchant_verification_value
     * @return $this
     */
    public function setMerchantVerificationValue($merchant_verification_value)
    {
        $this->container['merchant_verification_value'] = $merchant_verification_value;

        return $this;
    }

    /**
     * Gets sharing_group_code
     * @return string
     */
    public function getSharingGroupCode()
    {
        return $this->container['sharing_group_code'];
    }

    /**
     * Sets sharing_group_code
     * @param string $sharing_group_code This field is optionally used by Push Payments Gateway participants (merchants and acquirers) to specify the network access priority.<br><br>Refer to <a href=\"/request_response_codes#network_id_and_sharing_group_code\">Sharing Group Code</a><br><br><b>Note:</b><br>Supported only in US for domestic transactions involving Push Payments Gateway Service.
     * @return $this
     */
    public function setSharingGroupCode($sharing_group_code)
    {
        $this->container['sharing_group_code'] = $sharing_group_code;

        return $this;
    }

    /**
     * Gets acquirer_country_code
     * @return int
     */
    public function getAcquirerCountryCode()
    {
        return $this->container['acquirer_country_code'];
    }

    /**
     * Sets acquirer_country_code
     * @param int $acquirer_country_code Use a 3-digit numeric country code for the country where the Visa Direct solution is registered. This must match the information provided during program enrollment.<br><br>Refer to <a href=\"/request_response_codes#iso_country_and_currency_codes\">ISO Codes</a>
     * @return $this
     */
    public function setAcquirerCountryCode($acquirer_country_code)
    {
        $this->container['acquirer_country_code'] = $acquirer_country_code;

        return $this;
    }

    /**
     * Gets systems_trace_audit_number
     * @return int
     */
    public function getSystemsTraceAuditNumber()
    {
        return $this->container['systems_trace_audit_number'];
    }

    /**
     * Sets systems_trace_audit_number
     * @param int $systems_trace_audit_number A unique value should be used for each API method where this is required. however, when passing the Account Funding Transaction Reversal (AFTR) method, this value must match the systemsTraceAuditNumber previously passed with the AFT method for the current transaction.
     * @return $this
     */
    public function setSystemsTraceAuditNumber($systems_trace_audit_number)
    {
        $this->container['systems_trace_audit_number'] = $systems_trace_audit_number;

        return $this;
    }

    /**
     * Gets original_data_elements
     * @return \ft_100\model\OriginalDataElements
     */
    public function getOriginalDataElements()
    {
        return $this->container['original_data_elements'];
    }

    /**
     * Sets original_data_elements
     * @param \ft_100\model\OriginalDataElements $original_data_elements
     * @return $this
     */
    public function setOriginalDataElements($original_data_elements)
    {
        $this->container['original_data_elements'] = $original_data_elements;

        return $this;
    }

    /**
     * Gets member_comments
     * @return string
     */
    public function getMemberComments()
    {
        return $this->container['member_comments'];
    }

    /**
     * Sets member_comments
     * @param string $member_comments This field can be optionally used to send and receive comments by service providers. Issuers can optionally include new text in this field in the response. If the issuer does not include this field, Visa will inject the value from the request in the response and send it back to the service provider.
     * @return $this
     */
    public function setMemberComments($member_comments)
    {
        $this->container['member_comments'] = $member_comments;

        return $this;
    }

    /**
     * Gets national_reimbursement_fee
     * @return float
     */
    public function getNationalReimbursementFee()
    {
        return $this->container['national_reimbursement_fee'];
    }

    /**
     * Sets national_reimbursement_fee
     * @param float $national_reimbursement_fee When present, this field contains the IRF fees.
     * @return $this
     */
    public function setNationalReimbursementFee($national_reimbursement_fee)
    {
        $this->container['national_reimbursement_fee'] = $national_reimbursement_fee;

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
     * @param string $fee_program_indicator If present, a valid value is required. Spaces or special characters are not allowed.
     * @return $this
     */
    public function setFeeProgramIndicator($fee_program_indicator)
    {
        $this->container['fee_program_indicator'] = $fee_program_indicator;

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
     * @param string $retrieval_reference_number A value used to tie together service calls related to a single financial transaction. When passing Account Funding Transaction (AFT) and Original Credit Transaction (OCT) methods, this value must differ between the two methods. When passing the Account Funding Transaction Reversal (AFTR) method, this value must match the retrievalReferenceNumber previously passed with the AFT method for this transaction.<br><br>Recommended Format: ydddhhnnnnnn<br><br>The first fours digits must be a valid yddd date in the Julian date format, where the first digit = 0-9 (last digit of current year) and the next three digits = 001-366 (number of the day in the year).<br><br>hh can be the two digit hour in a 24 hour clock (00-23) during which the transaction is performed.<br><br>nnnnnn can be the systemsTraceAuditNumber or any 6 digit number.
     * @return $this
     */
    public function setRetrievalReferenceNumber($retrieval_reference_number)
    {
        $this->container['retrieval_reference_number'] = $retrieval_reference_number;

        return $this;
    }

    /**
     * Gets acquiring_bin
     * @return int
     */
    public function getAcquiringBin()
    {
        return $this->container['acquiring_bin'];
    }

    /**
     * Sets acquiring_bin
     * @param int $acquiring_bin The Bank Identification Number (BIN) under which your Visa Direct is registered. This must match the information provided during enrollment.
     * @return $this
     */
    public function setAcquiringBin($acquiring_bin)
    {
        $this->container['acquiring_bin'] = $acquiring_bin;

        return $this;
    }

    /**
     * Gets merchant_pseudo_aba_number
     * @return string
     */
    public function getMerchantPseudoAbaNumber()
    {
        return $this->container['merchant_pseudo_aba_number'];
    }

    /**
     * Sets merchant_pseudo_aba_number
     * @param string $merchant_pseudo_aba_number This is a number that uniquely identifies the originator when they sign up to send Push Payment Gateway transactions. On enrollment, an originator will get a single pseudo-value that is assigned by Visa. The other networks will assign their own unique values for the originator.<br><br><b>Note:</b><br>Supported only in US for domestic transactions involving Push Payments Gateway Service.
     * @return $this
     */
    public function setMerchantPseudoAbaNumber($merchant_pseudo_aba_number)
    {
        $this->container['merchant_pseudo_aba_number'] = $merchant_pseudo_aba_number;

        return $this;
    }

    /**
     * Gets foreign_exchange_fee_transaction
     * @return float
     */
    public function getForeignExchangeFeeTransaction()
    {
        return $this->container['foreign_exchange_fee_transaction'];
    }

    /**
     * Sets foreign_exchange_fee_transaction
     * @param float $foreign_exchange_fee_transaction When present, this field contains the sender's foreign exchange markup fee (markup above the wholesale or VisaNet exchange rate as assessed by the originator. Values in this field must be in the same currency and format as defined in the amount field.
     * @return $this
     */
    public function setForeignExchangeFeeTransaction($foreign_exchange_fee_transaction)
    {
        $this->container['foreign_exchange_fee_transaction'] = $foreign_exchange_fee_transaction;

        return $this;
    }

    /**
     * Gets point_of_service_data
     * @return \ft_100\model\PointOfServiceData
     */
    public function getPointOfServiceData()
    {
        return $this->container['point_of_service_data'];
    }

    /**
     * Sets point_of_service_data
     * @param \ft_100\model\PointOfServiceData $point_of_service_data
     * @return $this
     */
    public function setPointOfServiceData($point_of_service_data)
    {
        $this->container['point_of_service_data'] = $point_of_service_data;

        return $this;
    }

    /**
     * Gets sender_primary_account_number
     * @return string
     */
    public function getSenderPrimaryAccountNumber()
    {
        return $this->container['sender_primary_account_number'];
    }

    /**
     * Sets sender_primary_account_number
     * @param string $sender_primary_account_number The primary account number of the sender's account.
     * @return $this
     */
    public function setSenderPrimaryAccountNumber($sender_primary_account_number)
    {
        $this->container['sender_primary_account_number'] = $sender_primary_account_number;

        return $this;
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
     * @param string $local_transaction_date_time 
     * @return $this
     */
    public function setLocalTransactionDateTime($local_transaction_date_time)
    {
        $this->container['local_transaction_date_time'] = $local_transaction_date_time;

        return $this;
    }

    /**
     * Gets sender_card_expiry_date
     * @return string
     */
    public function getSenderCardExpiryDate()
    {
        return $this->container['sender_card_expiry_date'];
    }

    /**
     * Sets sender_card_expiry_date
     * @param string $sender_card_expiry_date The expiration date for the sender's Visa account number in senderPrimaryAccountNumber.
     * @return $this
     */
    public function setSenderCardExpiryDate($sender_card_expiry_date)
    {
        $this->container['sender_card_expiry_date'] = $sender_card_expiry_date;

        return $this;
    }

    /**
     * Gets amount
     * @return float
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param float $amount The total amount to be sent to the recipient
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

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
     * @param string $sender_currency_code Use a 3-character alpha currency code for currency of the sender.<br><br>Refer to <a href=\"/request_response_codes#iso_country_and_currency_codes\">ISO Codes</a>
     * @return $this
     */
    public function setSenderCurrencyCode($sender_currency_code)
    {
        $this->container['sender_currency_code'] = $sender_currency_code;

        return $this;
    }

    /**
     * Gets point_of_service_capability
     * @return \ft_100\model\PointOfServiceCapability
     */
    public function getPointOfServiceCapability()
    {
        return $this->container['point_of_service_capability'];
    }

    /**
     * Sets point_of_service_capability
     * @param \ft_100\model\PointOfServiceCapability $point_of_service_capability
     * @return $this
     */
    public function setPointOfServiceCapability($point_of_service_capability)
    {
        $this->container['point_of_service_capability'] = $point_of_service_capability;

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