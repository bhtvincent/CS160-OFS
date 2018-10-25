# mvs_100\MvisaApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getcashInPushPaymentsGet**](MvisaApi.md#getcashInPushPaymentsGet) | **GET** /visadirect/mvisa/v1/cashinpushpayments/{statusIdentifier} | 
[**getcashOutPaymentsGet**](MvisaApi.md#getcashOutPaymentsGet) | **GET** /visadirect/mvisa/v1/cashoutpushpayments/{statusIdentifier} | 
[**getmerchantPushPaymentGet**](MvisaApi.md#getmerchantPushPaymentGet) | **GET** /visadirect/mvisa/v1/merchantpushpayments/{statusIdentifier} | 
[**postcashInPushPayments**](MvisaApi.md#postcashInPushPayments) | **POST** /visadirect/mvisa/v1/cashinpushpayments | 
[**postcashOutPushPaymentsPost**](MvisaApi.md#postcashOutPushPaymentsPost) | **POST** /visadirect/mvisa/v1/cashoutpushpayments | 
[**postmerchantPushPaymentsPost**](MvisaApi.md#postmerchantPushPaymentsPost) | **POST** /visadirect/mvisa/v1/merchantpushpayments | 


# **getcashInPushPaymentsGet**
> \mvs_100\model\CashInPushPaymentsGetgetResponse getcashInPushPaymentsGet($status_identifier)



Get Cash In Push Payment

### Example
```php
<?php

require_once('./prod_6/mvs_100/autoload.php');
use \mvs_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate MvisaApi
    $api_instance = new mvs_100\Api\MvisaApi();

    // Set the required payload and parameters.
    $status_identifier = "status_identifier_example"; // string

    try {
    $result = $api_instance->getcashInPushPaymentsGet($status_identifier);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling MvisaApi->getcashInPushPaymentsGet: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_identifier** | **string**| Status Identifier |

### Return type

[**\mvs_100\model\CashInPushPaymentsGetgetResponse**](../Model/CashInPushPaymentsGetgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **getcashOutPaymentsGet**
> \mvs_100\model\CashOutPaymentsGetgetResponse getcashOutPaymentsGet($status_identifier)



Get Cash Out Push Payment

### Example
```php
<?php

require_once('./prod_6/mvs_100/autoload.php');
use \mvs_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate MvisaApi
    $api_instance = new mvs_100\Api\MvisaApi();

    // Set the required payload and parameters.
    $status_identifier = "status_identifier_example"; // string

    try {
    $result = $api_instance->getcashOutPaymentsGet($status_identifier);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling MvisaApi->getcashOutPaymentsGet: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_identifier** | **string**| Status Identifier |

### Return type

[**\mvs_100\model\CashOutPaymentsGetgetResponse**](../Model/CashOutPaymentsGetgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **getmerchantPushPaymentGet**
> \mvs_100\model\MerchantPushPaymentGetgetResponse getmerchantPushPaymentGet($status_identifier)



Get Merchant Push Payment

### Example
```php
<?php

require_once('./prod_6/mvs_100/autoload.php');
use \mvs_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate MvisaApi
    $api_instance = new mvs_100\Api\MvisaApi();

    // Set the required payload and parameters.
    $status_identifier = "status_identifier_example"; // string

    try {
    $result = $api_instance->getmerchantPushPaymentGet($status_identifier);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling MvisaApi->getmerchantPushPaymentGet: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_identifier** | **string**| Status Identifier |

### Return type

[**\mvs_100\model\MerchantPushPaymentGetgetResponse**](../Model/MerchantPushPaymentGetgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postcashInPushPayments**
> \mvs_100\model\CashInPushPaymentspostResponse postcashInPushPayments($cash_in_push_paymentspost_payload)



Create Cash In Push Payment

### Example
```php
<?php

require_once('./prod_6/mvs_100/autoload.php');
use \mvs_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate MvisaApi
    $api_instance = new mvs_100\Api\MvisaApi();

    // Set the required payload and parameters.
    $cash_in_push_paymentspost_payload = new \mvs_100\model\CashInPushPaymentspostPayload(); // \mvs_100\model\CashInPushPaymentspostPayload

    try {
    $result = $api_instance->postcashInPushPayments($cash_in_push_paymentspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling MvisaApi->postcashInPushPayments: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cash_in_push_paymentspost_payload** | [**\mvs_100\model\CashInPushPaymentspostPayload**](../Model/\mvs_100\model\CashInPushPaymentspostPayload.md)| Request body for creating in cash in push payment |

### Return type

[**\mvs_100\model\CashInPushPaymentspostResponse**](../Model/CashInPushPaymentspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postcashOutPushPaymentsPost**
> \mvs_100\model\CashOutPushPaymentsPostpostResponse postcashOutPushPaymentsPost($cash_out_push_payments_postpost_payload)



Create Cash Out Push Payment

### Example
```php
<?php

require_once('./prod_6/mvs_100/autoload.php');
use \mvs_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate MvisaApi
    $api_instance = new mvs_100\Api\MvisaApi();

    // Set the required payload and parameters.
    $cash_out_push_payments_postpost_payload = new \mvs_100\model\CashOutPushPaymentsPostpostPayload(); // \mvs_100\model\CashOutPushPaymentsPostpostPayload

    try {
    $result = $api_instance->postcashOutPushPaymentsPost($cash_out_push_payments_postpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling MvisaApi->postcashOutPushPaymentsPost: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cash_out_push_payments_postpost_payload** | [**\mvs_100\model\CashOutPushPaymentsPostpostPayload**](../Model/\mvs_100\model\CashOutPushPaymentsPostpostPayload.md)| Request body for creating in cash out push payment |

### Return type

[**\mvs_100\model\CashOutPushPaymentsPostpostResponse**](../Model/CashOutPushPaymentsPostpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postmerchantPushPaymentsPost**
> \mvs_100\model\MerchantPushPaymentsPostpostResponse postmerchantPushPaymentsPost($merchant_push_payments_postpost_payload)



Create Merchant Push Payment

### Example
```php
<?php

require_once('./prod_6/mvs_100/autoload.php');
use \mvs_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate MvisaApi
    $api_instance = new mvs_100\Api\MvisaApi();

    // Set the required payload and parameters.
    $merchant_push_payments_postpost_payload = new \mvs_100\model\MerchantPushPaymentsPostpostPayload(); // \mvs_100\model\MerchantPushPaymentsPostpostPayload

    try {
    $result = $api_instance->postmerchantPushPaymentsPost($merchant_push_payments_postpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling MvisaApi->postmerchantPushPaymentsPost: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchant_push_payments_postpost_payload** | [**\mvs_100\model\MerchantPushPaymentsPostpostPayload**](../Model/\mvs_100\model\MerchantPushPaymentsPostpostPayload.md)| Request body for creating in merchant push payment |

### Return type

[**\mvs_100\model\MerchantPushPaymentsPostpostResponse**](../Model/MerchantPushPaymentsPostpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)


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