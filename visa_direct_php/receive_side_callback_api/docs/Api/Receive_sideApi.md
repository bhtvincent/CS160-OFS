# rcvs_100\Receive_sideApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**postcashIn**](Receive_sideApi.md#postcashIn) | **POST** /visadirect/v1/pushpayment/transactions/receive/ci | 
[**postcashIn_0**](Receive_sideApi.md#postcashIn_0) | **POST** /visadirect/v1/pushpayment/transactions/receive/co | 
[**postciAdvice**](Receive_sideApi.md#postciAdvice) | **POST** /visadirect/v1/pushpayment/advice/receive/ci | 
[**postcoAdvice**](Receive_sideApi.md#postcoAdvice) | **POST** /visadirect/v1/pushpayment/advice/receive/co | 
[**postreceiveP2M**](Receive_sideApi.md#postreceiveP2M) | **POST** /visadirect/v1/pushpayment/transactions/receive/p2m | 
[**postreceiveP2MAdvice**](Receive_sideApi.md#postreceiveP2MAdvice) | **POST** /visadirect/v1/pushpayment/advice/receive/p2m | 


# **postcashIn**
> \rcvs_100\model\CashInpostResponse postcashIn($cash_inpost_payload)



Receive Cash-in API specification

### Example
```php
<?php

require_once('./prod_6/rcvs_100/autoload.php');
use \rcvs_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Receive_sideApi
    $api_instance = new rcvs_100\Api\Receive_sideApi();

    // Set the required payload and parameters.
    $cash_inpost_payload = new \rcvs_100\model\CashInpostPayload(); // \rcvs_100\model\CashInpostPayload

    try {
    $result = $api_instance->postcashIn($cash_inpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Receive_sideApi->postcashIn: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cash_inpost_payload** | [**\rcvs_100\model\CashInpostPayload**](../Model/\rcvs_100\model\CashInpostPayload.md)| Request body for Receive Cash-In API |

### Return type

[**\rcvs_100\model\CashInpostResponse**](../Model/CashInpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postcashIn_0**
> \rcvs_100\model\CashInpostResponse postcashIn_0($cash_inpost_payload)



Receive Cash-Out API specification

### Example
```php
<?php

require_once('./prod_6/rcvs_100/autoload.php');
use \rcvs_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Receive_sideApi
    $api_instance = new rcvs_100\Api\Receive_sideApi();

    // Set the required payload and parameters.
    $cash_inpost_payload = new \rcvs_100\model\CashInpostPayload(); // \rcvs_100\model\CashInpostPayload

    try {
    $result = $api_instance->postcashIn_0($cash_inpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Receive_sideApi->postcashIn_0: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cash_inpost_payload** | [**\rcvs_100\model\CashInpostPayload**](../Model/\rcvs_100\model\CashInpostPayload.md)| Request body for Receive Cash-Out API |

### Return type

[**\rcvs_100\model\CashInpostResponse**](../Model/CashInpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postciAdvice**
> \rcvs_100\model\CiAdvicepostResponse postciAdvice($ci_advicepost_payload)



Receive Cash-in Advice API specification

### Example
```php
<?php

require_once('./prod_6/rcvs_100/autoload.php');
use \rcvs_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Receive_sideApi
    $api_instance = new rcvs_100\Api\Receive_sideApi();

    // Set the required payload and parameters.
    $ci_advicepost_payload = new \rcvs_100\model\CiAdvicepostPayload(); // \rcvs_100\model\CiAdvicepostPayload

    try {
    $result = $api_instance->postciAdvice($ci_advicepost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Receive_sideApi->postciAdvice: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ci_advicepost_payload** | [**\rcvs_100\model\CiAdvicepostPayload**](../Model/\rcvs_100\model\CiAdvicepostPayload.md)| Request body for Receive Cash-In Advice API |

### Return type

[**\rcvs_100\model\CiAdvicepostResponse**](../Model/CiAdvicepostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postcoAdvice**
> \rcvs_100\model\CoAdvicepostResponse postcoAdvice($co_advicepost_payload)



Receive Cash-out Advice API specification

### Example
```php
<?php

require_once('./prod_6/rcvs_100/autoload.php');
use \rcvs_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Receive_sideApi
    $api_instance = new rcvs_100\Api\Receive_sideApi();

    // Set the required payload and parameters.
    $co_advicepost_payload = new \rcvs_100\model\CoAdvicepostPayload(); // \rcvs_100\model\CoAdvicepostPayload

    try {
    $result = $api_instance->postcoAdvice($co_advicepost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Receive_sideApi->postcoAdvice: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **co_advicepost_payload** | [**\rcvs_100\model\CoAdvicepostPayload**](../Model/\rcvs_100\model\CoAdvicepostPayload.md)| Request body for Receive Cash-Out Advice API |

### Return type

[**\rcvs_100\model\CoAdvicepostResponse**](../Model/CoAdvicepostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postreceiveP2M**
> \rcvs_100\model\ReceiveP2MpostResponse postreceiveP2M($receive_p2_mpost_payload)



Receive Person-to-Merchant API specification

### Example
```php
<?php

require_once('./prod_6/rcvs_100/autoload.php');
use \rcvs_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Receive_sideApi
    $api_instance = new rcvs_100\Api\Receive_sideApi();

    // Set the required payload and parameters.
    $receive_p2_mpost_payload = new \rcvs_100\model\ReceiveP2MpostPayload(); // \rcvs_100\model\ReceiveP2MpostPayload

    try {
    $result = $api_instance->postreceiveP2M($receive_p2_mpost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Receive_sideApi->postreceiveP2M: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receive_p2_mpost_payload** | [**\rcvs_100\model\ReceiveP2MpostPayload**](../Model/\rcvs_100\model\ReceiveP2MpostPayload.md)| Request body for Receive Person-to-Merchant API |

### Return type

[**\rcvs_100\model\ReceiveP2MpostResponse**](../Model/ReceiveP2MpostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postreceiveP2MAdvice**
> \rcvs_100\model\ReceiveP2MAdvicepostResponse postreceiveP2MAdvice($receive_p2_m_advicepost_payload)



Receive Person-to-Merchant Advice API specification

### Example
```php
<?php

require_once('./prod_6/rcvs_100/autoload.php');
use \rcvs_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Receive_sideApi
    $api_instance = new rcvs_100\Api\Receive_sideApi();

    // Set the required payload and parameters.
    $receive_p2_m_advicepost_payload = new \rcvs_100\model\ReceiveP2MAdvicepostPayload(); // \rcvs_100\model\ReceiveP2MAdvicepostPayload

    try {
    $result = $api_instance->postreceiveP2MAdvice($receive_p2_m_advicepost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Receive_sideApi->postreceiveP2MAdvice: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **receive_p2_m_advicepost_payload** | [**\rcvs_100\model\ReceiveP2MAdvicepostPayload**](../Model/\rcvs_100\model\ReceiveP2MAdvicepostPayload.md)| Request body for Receive Person-to-Merchant Advice API |

### Return type

[**\rcvs_100\model\ReceiveP2MAdvicepostResponse**](../Model/ReceiveP2MAdvicepostResponse.md)

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