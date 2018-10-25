# MultipushfundspostPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**business_application_id** | **string** | Identifies the programs&#39; business application type for VisaNet transaction processing&lt;br&gt;&lt;br&gt;For Money Transfer, AA applies to transactions where the sender and recipient are the same person and PP applies to transactions where the sender and recipient are not the same person.&lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#business_application_identifier\&quot;&gt;businessApplicationId&lt;/a&gt; codes | [optional] 
**retrieval_reference_number** | **string** | A value used to tie together service calls related to a single financial transaction. When passing Account Funding Transaction (AFT) and an Original Credit Transaction (OCT) methods, this value must differ between the two methods. When passing the Account Funding Transaction Reversal (AFTR) method, this value must match the retrievalReferenceNumber previously passed with the AFT method for this transaction.&lt;br&gt;&lt;br&gt; Recommended Format : ydddhhnnnnnn&lt;br&gt;&lt;br&gt;The first fours digits must be a valid yddd date in the Julian date format, where the first digit &#x3D; 0-9 (last digit of current year) and the next three digits &#x3D; 001-366 (number of the day in the year). hh can be the two digit hour in a 24 hour clock (00-23) during which the transaction is performed.&lt;br&gt;&lt;br&gt; nnnnnn can be the systemsTraceAuditNumber or any 6 digit number. | 
**card_acceptor** | [**\ft_100\model\CardAcceptor**](CardAcceptor.md) |  | 
**sender_address** | **string** | If the transaction is a money transfer and cross-border or U.S. domestic, this field must contain the sender&#39;s address.&lt;br&gt;&lt;br&gt;If the transaction is a funds disbursement and cross-border or U.S. domestic, this field must contain either the address of the merchant or government entity sending the funds disbursement.&lt;br&gt;&lt;br&gt;If the transaction is a pre-paid load or credit card bill pay and U.S. domestic, this field must contain the sender&#39;s address. | [optional] 
**sender_city** | **string** | If the transaction is a money transfer and cross-border or U.S. domestic, this field must contain the sender&#39;s city.&lt;br&gt;&lt;br&gt;If the transaction is a funds disbursement and cross-border or U.S. domestic, this field must contain either the city of the merchant or government entity sending the funds disbursement.&lt;br&gt;&lt;br&gt;If the transaction is a pre-paid load or credit card bill pay and U.S. domestic, this field must contain the sender&#39;s city. | [optional] 
**source_of_funds_code** | **string** | If the transaction is a money transfer, the field is required and must contain a valid &lt;a href&#x3D;\&quot;/request_response_codes#source_of_funds\&quot;&gt;sourceOfFundsCode&lt;/a&gt; code that matches the funding instrument.&lt;br&gt;&lt;br&gt;If the transaction is a funds disbursement, the field is required and most likely contains a \&quot;05\&quot; as the &lt;a href&#x3D;\&quot;/request_response_codes#source_of_funds\&quot;&gt;sourceOfFundsCode&lt;/a&gt; code to identify that the merchant or government entity used a deposit account to fund the disbursement&lt;br&gt;&lt;br&gt;If the transaction is a pre-paid load, the field is required if the transaction is non-U.S. domestic.&lt;br&gt;&lt;br&gt;If the transaction is a credit bill pay, the field is required if the transaction is non-U.S. domestic, and the &lt;a href&#x3D;\&quot;/request_response_codes#source_of_funds\&quot;&gt;sourceOfFundsCode&lt;/a&gt; code must not contain a \&quot;01\&quot; or \&quot;06\&quot;.&lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#source_of_funds\&quot;&gt;sourceOfFundsCode&lt;/a&gt; codes | [optional] 
**recipient_name** | **string** | Recipient name is required for cross-border enhanced money transfer OCTs. | 
**sender_middle_initial** | **string** | This field contains sender&#39;s middle initial | [optional] 
**sender_name** | **string** | If the transaction is a money transfer and cross-border or U.S. domestic, this field must contain the sender&#39;s name.&lt;br&gt;&lt;br&gt;If the transaction is a funds disbursement and cross-border or U.S. domestic, this field must contain either the name of the merchant or government entity sending the funds disbursement.&lt;br&gt;&lt;br&gt;If the transaction is a pre-paid load or credit card bill pay and U.S. domestic, this field must contain the sender&#39;s name.&lt;br&gt;&lt;br&gt;Recommended Format: Last Name/Family Surname 1 + Space + Last Name/Family Surname 2 (optional) + Space + First Name/Given Name + Space + Middle Initial or Middle name (optional) + space&lt;br&gt;&lt;br&gt;Example: Doe John A | [optional] 
**recipient_state** | **string** | Required if RecipientCountryCode is either 124(CAN) or 840(USA) | [optional] 
**surcharge** | **string** | When present, this field contains the sender&#39;s surcharge as assessed by the originator. Values in this field must be in the same currency and format as defined in the amount field.&lt;br&gt;&lt;br&gt;&lt;b&gt;Note:&lt;/b&gt;&lt;br&gt;Supported only in the US. | [optional] 
**sender_state_code** | **string** | Required if SenderCountryCode is either 124(CAN) or 840(USA) | [optional] 
**merchant_category_code** | **int** | If provided, then the value overrides the one present in onboarding data. If the merchantCategoryCode value is not populated in onboarding data then this field is mandatory.&lt;br&gt;&lt;br&gt;If not provided, then the value will default to the values provided during onboarding (when the services are provisioned)&lt;b&gt;Note:&lt;/b&gt; required if not provided during onboarding | [optional] 
**sender_last_name** | **string** | This field contains sender&#39;s last name | [optional] 
**merchant_verification_value** | [**\ft_100\model\MerchantVerificationValue**](MerchantVerificationValue.md) |  | [optional] 
**sharing_group_code** | **string** | This field is optionally used by Push Payments Gateway participants (merchants and acquirers) to specify the network access priority.&lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#network_id_and_sharing_group_code\&quot;&gt;Sharing Group Code&lt;/a&gt;&lt;br&gt;&lt;br&gt;&lt;b&gt;Note:&lt;/b&gt;&lt;br&gt;Supported only in US for domestic transactions involving Push Payments Gateway Service. | [optional] 
**acquirer_country_code** | **int** | Use a 3-digit numeric country code for the country of the BIN under which your Visa Direct solution is registered. This must match the information provided during program enrollment.&lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_and_currency_codes\&quot;&gt;ISO Codes&lt;/a&gt; | 
**sender_reference** | **string** | If the transaction is a money transfer, pre-paid load, or credit card bill pay, and if the sender intends to fund the transaction with a non-financial instrument (for example, cash), a reference number unique to the sender is required.&lt;br&gt;&lt;br&gt;If the transaction is a funds disbursement, the field is required.&lt;br&gt;&lt;br&gt; This field is required if senderAccountNumber is not sent. | [optional] 
**recipient_primary_account_number** | **string** | The recipient&#39;s PAN. | [optional] 
**recipient_last_name** | **string** | When present, this field contains recipient&#39;s last name | [optional] 
**national_reimbursement_fee** | **float** | When present, this field contains the IRF fees. | [optional] 
**sender_postal_code** | **string** | When present, this field contains the sender&#39;s postal code | [optional] 
**sender_first_name** | **string** | This field contains sender&#39;s first name | [optional] 
**sender_account_number** | **string** | If the transaction is a money transfer, pre-paid load, or credit card bill pay, and if the sender intends to fund the transaction with a financial instrument (for example, debit card), and if the SenderCardId attribute is not sent, this field is required and must contain the sender&#39;s account number. &lt;br&gt;&lt;br&gt;If the transaction is a funds disbursement, the field is not required. | [optional] 
**fee_program_indicator** | **string** | &lt;b&gt;Note:&lt;/b&gt; If present, a valid value is required. Spaces or special characters are not allowed. | [optional] 
**transaction_currency_code** | **string** | Use a 3-character alpha or numeric currency code for currency of the sender. You should (unless prohibited by local law / regulation) use the billingCurrencyCode obtained from the Funds Transfer Attribute Inquiry API under Payment Account Attribute Inquiry. &lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_and_currency_codes\&quot;&gt;ISO Codes&lt;/a&gt; | 
**acquiring_bin** | **int** | The Bank Identification Number (BIN) under which the Visa Direct solution is registered. This must match the information provided during enrollment. | 
**account_type** | **string** | This is used to identify the account type of the senderPrimaryAccountNumber in the request. Below are the possible values.&lt;br&gt;&lt;br&gt; 00-Not applicable&lt;br&gt; 10-Saving account&lt;br&gt; 20-Checking account&lt;br&gt; 30-Credit card account&lt;br&gt; 40-Universal account&lt;br&gt;&lt;br&gt;Default is set to \&quot;00\&quot; if not provided. | [optional] 
**merchant_pseudo_aba_number** | **string** | This is a number that uniquely identifies the originator when they sign up to send Push Payment Gateway transactions. On enrollment, an originator will get a single pseudo-value that is assigned by Visa. The other networks will assign their own unique values for the originator.&lt;br&gt;&lt;br&gt;&lt;b&gt;Note:&lt;/b&gt;&lt;br&gt;Supported only in US for domestic transactions involving Push Payments Gateway Service. | [optional] 
**transaction_identifier** | **int** | The VisaNet transaction identifier. If you have previously sent an AFT, this field must include the VisaNet transaction identifier returned in the AFT response. | [optional] 
**local_transaction_date_time** | **string** |  | 
**recipient_first_name** | **string** | When present, this field contains recipient&#39;s first name | [optional] 
**amount** | **float** | The transaction amount to be delivered to the recipient. | 
**sender_date_of_birth** | **string** | The birth date for the sender | [optional] 
**recipient_middle_initial** | **string** | When present, this field contains recipient&#39;s middle initial | [optional] 
**recipient_card_expiry_date** | **string** | The expiration date for the recipient&#39;s primary account number in  recipientPrimaryAccountNumber | [optional] 
**recipient_country_code** | **string** | when present, this field contains recipient&#39;s country code &lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_codes\&quot;&gt;ISO Codes&lt;/a&gt; | [optional] 
**systems_trace_audit_number** | **int** | A unique value should be used for each API method. However, when passing the (AFTR) method, this value must match the systemsTraceAuditNumber previously passed with the AFT method for the current transaction. | 
**sender_country_code** | **string** | If the transaction is a money transfer and cross-border or U.S. domestic, this field must contain the sender&#39;s country code.&lt;br&gt;&lt;br&gt;If the transaction is a funds disbursement and cross-border or U.S. domestic, this field must contain either the country code of the merchant or government entity sending the funds disbursement.&lt;br&gt;&lt;br&gt;If the transaction is a pre-paid load or credit card bill pay and U.S. domestic, this field must contain the sender&#39;s country code.&lt;br&gt;&lt;br&gt;Alpha or numeric country code can be supported.&lt;br&gt;&lt;br&gt;This field is required when sending the transactions to some of the US debit networks.&lt;br&gt;&lt;br&gt;Refer to &lt;a href&#x3D;\&quot;/request_response_codes#iso_country_and_currency_codes\&quot;&gt;ISO Codes&lt;/a&gt; | [optional] 

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