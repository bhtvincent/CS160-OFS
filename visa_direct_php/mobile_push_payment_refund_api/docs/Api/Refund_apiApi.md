# mvrf_100\Refund_apiApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getmerchandiseReturnGet**](Refund_apiApi.md#getmerchandiseReturnGet) | **GET** /visadirect/mvisa/v1/mr/{statusIdentifier} | 
[**getmerchandiseReturnReversalGet**](Refund_apiApi.md#getmerchandiseReturnReversalGet) | **GET** /visadirect/mvisa/v1/mrr/{statusIdentifier} | 
[**postmerchandiseReturnPost**](Refund_apiApi.md#postmerchandiseReturnPost) | **POST** /visadirect/mvisa/v1/mr | 
[**postmerchandiseReturnReversalPost**](Refund_apiApi.md#postmerchandiseReturnReversalPost) | **POST** /visadirect/mvisa/v1/mrr | 


# **getmerchandiseReturnGet**
> \mvrf_100\model\MerchandiseReturnGetgetResponse getmerchandiseReturnGet($status_identifier)



Read Merchandise Return Transaction

### Example
```php
<?php

require_once('./prod_6/mvrf_100/autoload.php');
use \mvrf_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Refund_apiApi
    $api_instance = new mvrf_100\Api\Refund_apiApi();

    // Set the required payload and parameters.
    $status_identifier = "status_identifier_example"; // string

    try {
    $result = $api_instance->getmerchandiseReturnGet($status_identifier);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Refund_apiApi->getmerchandiseReturnGet: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_identifier** | **string**| Status Identifier |

### Return type

[**\mvrf_100\model\MerchandiseReturnGetgetResponse**](../Model/MerchandiseReturnGetgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **getmerchandiseReturnReversalGet**
> \mvrf_100\model\MerchandiseReturnReversalGetgetResponse getmerchandiseReturnReversalGet($status_identifier)



Read Merchandise Return Reversal Transaction

### Example
```php
<?php

require_once('./prod_6/mvrf_100/autoload.php');
use \mvrf_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Refund_apiApi
    $api_instance = new mvrf_100\Api\Refund_apiApi();

    // Set the required payload and parameters.
    $status_identifier = "status_identifier_example"; // string

    try {
    $result = $api_instance->getmerchandiseReturnReversalGet($status_identifier);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Refund_apiApi->getmerchandiseReturnReversalGet: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_identifier** | **string**| Status Identifier |

### Return type

[**\mvrf_100\model\MerchandiseReturnReversalGetgetResponse**](../Model/MerchandiseReturnReversalGetgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postmerchandiseReturnPost**
> \mvrf_100\model\MerchandiseReturnPostpostResponse postmerchandiseReturnPost($merchandise_return_postpost_payload)



Merchandise Return Transaction is used to refund (full or partial) sale amount back to mVisa consumer.  A merchant may, at its discretion, process a credit into consumer account when a valid transaction was previously processed. This situation can arise when the consumer cancels the purchase, or returns the goods in part or in full, or the merchant agrees to return a part of the payment.

### Example
```php
<?php

require_once('./prod_6/mvrf_100/autoload.php');
use \mvrf_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Refund_apiApi
    $api_instance = new mvrf_100\Api\Refund_apiApi();

    // Set the required payload and parameters.
    $merchandise_return_postpost_payload = new \mvrf_100\model\MerchandiseReturnPostpostPayload(); // \mvrf_100\model\MerchandiseReturnPostpostPayload

    try {
    $result = $api_instance->postmerchandiseReturnPost($merchandise_return_postpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Refund_apiApi->postmerchandiseReturnPost: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchandise_return_postpost_payload** | [**\mvrf_100\model\MerchandiseReturnPostpostPayload**](../Model/\mvrf_100\model\MerchandiseReturnPostpostPayload.md)| Request body for creating in merchandise return |

### Return type

[**\mvrf_100\model\MerchandiseReturnPostpostResponse**](../Model/MerchandiseReturnPostpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postmerchandiseReturnReversalPost**
> \mvrf_100\model\MerchandiseReturnReversalPostpostResponse postmerchandiseReturnReversalPost($merchandise_return_reversal_postpost_payload)



Merchandise Return Reversal Transaction is used to reverse the refund amount that sent to the mVisa consumer.

### Example
```php
<?php

require_once('./prod_6/mvrf_100/autoload.php');
use \mvrf_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Refund_apiApi
    $api_instance = new mvrf_100\Api\Refund_apiApi();

    // Set the required payload and parameters.
    $merchandise_return_reversal_postpost_payload = new \mvrf_100\model\MerchandiseReturnReversalPostpostPayload(); // \mvrf_100\model\MerchandiseReturnReversalPostpostPayload

    try {
    $result = $api_instance->postmerchandiseReturnReversalPost($merchandise_return_reversal_postpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Refund_apiApi->postmerchandiseReturnReversalPost: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchandise_return_reversal_postpost_payload** | [**\mvrf_100\model\MerchandiseReturnReversalPostpostPayload**](../Model/\mvrf_100\model\MerchandiseReturnReversalPostpostPayload.md)| Request body for creating in merchandise return reversal |

### Return type

[**\mvrf_100\model\MerchandiseReturnReversalPostpostResponse**](../Model/MerchandiseReturnReversalPostpostResponse.md)

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