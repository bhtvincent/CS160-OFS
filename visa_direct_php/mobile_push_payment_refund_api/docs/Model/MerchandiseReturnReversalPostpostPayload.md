# MerchandiseReturnReversalPostpostPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**local_transaction_date_time** | **string** | This should be +/- 3 days from the current date.The date is in yyyy-mm-ddThh:mm:ss format | 
**recipient_primary_account_number** | **string** | Populate with Consumer PAN used in the refund transaction. | 
**fee_program_indicator** | **string** | Originators can leave this field blank. | [optional] 
**transaction_fee_amt** | **string** | Prefix ‘D’ &lt;br&gt;&lt;br&gt;Originators are required to populate convenience fee amount in this field to be returned, if presented in the original refund message. | [optional] 
**acquirer_country_code** | **string** | Use a 3-digit numeric country code for the country. This must match the information provided during program enrollment.&lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_and_currency_codes\&quot;&gt;ISO Codes&lt;/a&gt; | 
**transaction_identifier** | **string** | This value must match with the VisaNet reference number previously sent in the original refund transaction. | 
**amount** | **string** | The amount must match the original refund transaction. | 
**original_data_elements** | [**\mvrf_100\model\OriginalDataElements**](OriginalDataElements.md) |  | 
**card_acceptor** | [**\mvrf_100\model\CardAcceptor**](CardAcceptor.md) |  | [optional] 
**acquiring_bin** | **string** | This BIN number identifies the originator of refund transaction. This information must match the BIN provided during enrollment. | 
**retrieval_reference_number** | **string** | This value must match the retrievalReferenceNumber previously sent in the original refund transaction. | 
**systems_trace_audit_number** | **string** | This value must match with the systemsTraceAuditNumber previously sent in the original refund transaction. | 
**sender_currency_code** | **string** | The code in this field must always reflect the currency previously sent in the original refund transaction. | 
**merchant_verification_value** | [**\mvrf_100\model\MerchantVerificationValue**](MerchantVerificationValue.md) |  | [optional] 

[Back to Model list](../../README.md#documentation-for-models)          [Back to API list](../../README.md#documentation-for-api-endpoints)          [Back to README](../../README.md)



###----------------------------------------------------------------------------------------------------------------------
© Copyright 2018 Visa. All Rights Reserved.

NOTICE: The software and accompanying information and documentation (together, the “Software”) remain the property of
and are proprietary to Visa and its suppliers and affiliates. The Software remains protected by intellectual property
rights and may be covered by U.S. and foreign patents or patent applications. The Software is licensed and not sold.

By accessing the Software you are agreeing to Visa's terms of use (developer.visa.com/terms) and privacy policy (developer.visa.com/privacy).
In addition, all permissible uses of the Software must be in support of Visa products, programs and services provided
through the Visa Developer Program (VDP) platform only (developer.visa.com). THE SOFTWARE AND ANY ASSOCIATED
INFORMATION OR DOCUMENTATION IS PROVIDED ON AN “AS IS,” “AS AVAILABLE,” “WITH ALL FAULTS” BASIS WITHOUT WARRANTY OR
CONDITION OF ANY KIND. YOUR USE IS AT YOUR OWN RISK.

All brand names are the property of their respective owners, used for identification purposes only, and do not imply
product endorsement or affiliation with Visa. Any links to third party sites are for your information only and equally
do not constitute a Visa endorsement. Visa has no insight into and control over third party content and code and disclaims
all liability for any such components, including continued availability and functionality. Benefits depend on implementation
details and business factors and coding steps shown are exemplary only and do not reflect all necessary elements for the
described capabilities. Capabilities and features are subject to Visa’s terms and conditions and may require development,
implementation and resources by you based on your business and operational details. Please refer to the specific
API documentation for details on the requirements, eligibility and geographic availability.

This Software includes programs, concepts and details under continuing development by Visa. Any Visa features,
functionality, implementation, branding, and schedules may be amended, updated or canceled at Visa’s discretion.
The timing of widespread availability of programs and functionality is also subject to a number of factors outside Visa’s control,
including but not limited to deployment of necessary infrastructure by issuers, acquirers, merchants and mobile device manufacturers.
###----------------------------------------------------------------------------------------------------------------------