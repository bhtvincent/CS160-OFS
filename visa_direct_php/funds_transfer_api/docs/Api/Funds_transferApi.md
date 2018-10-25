# ft_100\Funds_transferApi

All URIs are relative to *https://sandbox.api.visa.com*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getmultipullfundstransactions**](Funds_transferApi.md#getmultipullfundstransactions) | **GET** /visadirect/fundstransfer/v1/multipullfundstransactions/{statusIdentifier} | 
[**getmultipushfundstransactions**](Funds_transferApi.md#getmultipushfundstransactions) | **GET** /visadirect/fundstransfer/v1/multipushfundstransactions/{statusIdentifier} | 
[**getmultireversefundstransactions**](Funds_transferApi.md#getmultireversefundstransactions) | **GET** /visadirect/fundstransfer/v1/multireversefundstransactions/{statusIdentifier} | 
[**getpullfundstransactions**](Funds_transferApi.md#getpullfundstransactions) | **GET** /visadirect/fundstransfer/v1/pullfundstransactions/{statusIdentifier} | 
[**getpushfundstransactions**](Funds_transferApi.md#getpushfundstransactions) | **GET** /visadirect/fundstransfer/v1/pushfundstransactions/{statusIdentifier} | 
[**getreversefundstransactions**](Funds_transferApi.md#getreversefundstransactions) | **GET** /visadirect/fundstransfer/v1/reversefundstransactions/{statusIdentifier} | 
[**postmultipullfunds**](Funds_transferApi.md#postmultipullfunds) | **POST** /visadirect/fundstransfer/v1/multipullfundstransactions | 
[**postmultipushfunds**](Funds_transferApi.md#postmultipushfunds) | **POST** /visadirect/fundstransfer/v1/multipushfundstransactions | 
[**postmultireversefunds**](Funds_transferApi.md#postmultireversefunds) | **POST** /visadirect/fundstransfer/v1/multireversefundstransactions | 
[**postpullfunds**](Funds_transferApi.md#postpullfunds) | **POST** /visadirect/fundstransfer/v1/pullfundstransactions | 
[**postpushfunds**](Funds_transferApi.md#postpushfunds) | **POST** /visadirect/fundstransfer/v1/pushfundstransactions | 
[**postreversefunds**](Funds_transferApi.md#postreversefunds) | **POST** /visadirect/fundstransfer/v1/reversefundstransactions | 


# **getmultipullfundstransactions**
> \ft_100\model\MultipullfundstransactionsgetResponse getmultipullfundstransactions($status_identifier)



Read Multi Pull Funds Transaction

### Example
```php
<?php

require_once('./prod_6/ft_100/autoload.php');
use \ft_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Funds_transferApi
    $api_instance = new ft_100\Api\Funds_transferApi();

    // Set the required payload and parameters.
    $status_identifier = "status_identifier_example"; // string

    try {
    $result = $api_instance->getmultipullfundstransactions($status_identifier);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Funds_transferApi->getmultipullfundstransactions: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_identifier** | **string**| Status Identifier |

### Return type

[**\ft_100\model\MultipullfundstransactionsgetResponse**](../Model/MultipullfundstransactionsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **getmultipushfundstransactions**
> \ft_100\model\MultipushfundstransactionsgetResponse getmultipushfundstransactions($status_identifier)



Read Multi Push Funds Transaction

### Example
```php
<?php

require_once('./prod_6/ft_100/autoload.php');
use \ft_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Funds_transferApi
    $api_instance = new ft_100\Api\Funds_transferApi();

    // Set the required payload and parameters.
    $status_identifier = "status_identifier_example"; // string

    try {
    $result = $api_instance->getmultipushfundstransactions($status_identifier);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Funds_transferApi->getmultipushfundstransactions: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_identifier** | **string**| Status Identifier |

### Return type

[**\ft_100\model\MultipushfundstransactionsgetResponse**](../Model/MultipushfundstransactionsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **getmultireversefundstransactions**
> \ft_100\model\MultireversefundstransactionsgetResponse getmultireversefundstransactions($status_identifier)



Read Multi Reverse Funds Transaction

### Example
```php
<?php

require_once('./prod_6/ft_100/autoload.php');
use \ft_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Funds_transferApi
    $api_instance = new ft_100\Api\Funds_transferApi();

    // Set the required payload and parameters.
    $status_identifier = "status_identifier_example"; // string

    try {
    $result = $api_instance->getmultireversefundstransactions($status_identifier);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Funds_transferApi->getmultireversefundstransactions: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_identifier** | **string**| Status Identifier |

### Return type

[**\ft_100\model\MultireversefundstransactionsgetResponse**](../Model/MultireversefundstransactionsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **getpullfundstransactions**
> \ft_100\model\PullfundstransactionsgetResponse getpullfundstransactions($status_identifier)



Read Pull Funds Transaction

### Example
```php
<?php

require_once('./prod_6/ft_100/autoload.php');
use \ft_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Funds_transferApi
    $api_instance = new ft_100\Api\Funds_transferApi();

    // Set the required payload and parameters.
    $status_identifier = "status_identifier_example"; // string

    try {
    $result = $api_instance->getpullfundstransactions($status_identifier);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Funds_transferApi->getpullfundstransactions: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_identifier** | **string**| Status Identifier |

### Return type

[**\ft_100\model\PullfundstransactionsgetResponse**](../Model/PullfundstransactionsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **getpushfundstransactions**
> \ft_100\model\PushfundstransactionsgetResponse getpushfundstransactions($status_identifier)



Read Push Funds Transaction

### Example
```php
<?php

require_once('./prod_6/ft_100/autoload.php');
use \ft_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Funds_transferApi
    $api_instance = new ft_100\Api\Funds_transferApi();

    // Set the required payload and parameters.
    $status_identifier = "status_identifier_example"; // string

    try {
    $result = $api_instance->getpushfundstransactions($status_identifier);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Funds_transferApi->getpushfundstransactions: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_identifier** | **string**| Status Identifier |

### Return type

[**\ft_100\model\PushfundstransactionsgetResponse**](../Model/PushfundstransactionsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **getreversefundstransactions**
> \ft_100\model\ReversefundstransactionsgetResponse getreversefundstransactions($status_identifier)



Read Reverse Funds Transaction

### Example
```php
<?php

require_once('./prod_6/ft_100/autoload.php');
use \ft_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Funds_transferApi
    $api_instance = new ft_100\Api\Funds_transferApi();

    // Set the required payload and parameters.
    $status_identifier = "status_identifier_example"; // string

    try {
    $result = $api_instance->getreversefundstransactions($status_identifier);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Funds_transferApi->getreversefundstransactions: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status_identifier** | **string**| Status Identifier |

### Return type

[**\ft_100\model\ReversefundstransactionsgetResponse**](../Model/ReversefundstransactionsgetResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postmultipullfunds**
> \ft_100\model\MultipullfundspostResponse postmultipullfunds($multipullfundspost_payload)



Create Multi Pull Funds Transaction

### Example
```php
<?php

require_once('./prod_6/ft_100/autoload.php');
use \ft_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Funds_transferApi
    $api_instance = new ft_100\Api\Funds_transferApi();

    // Set the required payload and parameters.
    $multipullfundspost_payload = new \ft_100\model\MultipullfundspostPayload(); // \ft_100\model\MultipullfundspostPayload

    try {
    $result = $api_instance->postmultipullfunds($multipullfundspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Funds_transferApi->postmultipullfunds: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **multipullfundspost_payload** | [**\ft_100\model\MultipullfundspostPayload**](../Model/\ft_100\model\MultipullfundspostPayload.md)| Request body for creating in multi pull funds transfer |

### Return type

[**\ft_100\model\MultipullfundspostResponse**](../Model/MultipullfundspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postmultipushfunds**
> \ft_100\model\MultipushfundspostResponse postmultipushfunds($multipushfundspost_payload)



Create Multi Push Funds Transaction

### Example
```php
<?php

require_once('./prod_6/ft_100/autoload.php');
use \ft_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Funds_transferApi
    $api_instance = new ft_100\Api\Funds_transferApi();

    // Set the required payload and parameters.
    $multipushfundspost_payload = new \ft_100\model\MultipushfundspostPayload(); // \ft_100\model\MultipushfundspostPayload

    try {
    $result = $api_instance->postmultipushfunds($multipushfundspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Funds_transferApi->postmultipushfunds: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **multipushfundspost_payload** | [**\ft_100\model\MultipushfundspostPayload**](../Model/\ft_100\model\MultipushfundspostPayload.md)| Request body for creating in multi push funds transfer |

### Return type

[**\ft_100\model\MultipushfundspostResponse**](../Model/MultipushfundspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postmultireversefunds**
> \ft_100\model\MultireversefundspostResponse postmultireversefunds($multireversefundspost_payload)



Create Multi Reverse Funds Transaction

### Example
```php
<?php

require_once('./prod_6/ft_100/autoload.php');
use \ft_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Funds_transferApi
    $api_instance = new ft_100\Api\Funds_transferApi();

    // Set the required payload and parameters.
    $multireversefundspost_payload = new \ft_100\model\MultireversefundspostPayload(); // \ft_100\model\MultireversefundspostPayload

    try {
    $result = $api_instance->postmultireversefunds($multireversefundspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Funds_transferApi->postmultireversefunds: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **multireversefundspost_payload** | [**\ft_100\model\MultireversefundspostPayload**](../Model/\ft_100\model\MultireversefundspostPayload.md)| Request body for creating in multi reverse funds transfer |

### Return type

[**\ft_100\model\MultireversefundspostResponse**](../Model/MultireversefundspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postpullfunds**
> \ft_100\model\PullfundspostResponse postpullfunds($pullfundspost_payload)



Create Pull Funds Transaction

### Example
```php
<?php

require_once('./prod_6/ft_100/autoload.php');
use \ft_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Funds_transferApi
    $api_instance = new ft_100\Api\Funds_transferApi();

    // Set the required payload and parameters.
    $pullfundspost_payload = new \ft_100\model\PullfundspostPayload(); // \ft_100\model\PullfundspostPayload

    try {
    $result = $api_instance->postpullfunds($pullfundspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Funds_transferApi->postpullfunds: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pullfundspost_payload** | [**\ft_100\model\PullfundspostPayload**](../Model/\ft_100\model\PullfundspostPayload.md)| Request body for creating in pull funds transfer |

### Return type

[**\ft_100\model\PullfundspostResponse**](../Model/PullfundspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postpushfunds**
> \ft_100\model\PushfundspostResponse postpushfunds($pushfundspost_payload)



Create Push Funds Transaction

### Example
```php
<?php

require_once('./prod_6/ft_100/autoload.php');
use \ft_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Funds_transferApi
    $api_instance = new ft_100\Api\Funds_transferApi();

    // Set the required payload and parameters.
    $pushfundspost_payload = new \ft_100\model\PushfundspostPayload(); // \ft_100\model\PushfundspostPayload

    try {
    $result = $api_instance->postpushfunds($pushfundspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Funds_transferApi->postpushfunds: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pushfundspost_payload** | [**\ft_100\model\PushfundspostPayload**](../Model/\ft_100\model\PushfundspostPayload.md)| Request body for creating in push funds transfer |

### Return type

[**\ft_100\model\PushfundspostResponse**](../Model/PushfundspostResponse.md)

### Authorization

[basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[Back to top](#)     [Back to API list](../../README.md#documentation-for-api-endpoints)     [Back to Model list](../../README.md#documentation-for-models)    [Back to README](../../README.md)

# **postreversefunds**
> \ft_100\model\ReversefundspostResponse postreversefunds($reversefundspost_payload)



Create Reverse Funds Transaction

### Example
```php
<?php

require_once('./prod_6/ft_100/autoload.php');
use \ft_100\Configuration;

    $config = Configuration::getDefaultConfiguration();
    
    // Configure HTTP basic authorization: basicAuth
    $config->setUsername("Username");
    $config->setPassword("Password");
    $config->setCertificatePath("Certificate_path");
    $config->setPrivateKey("Private_key_path");

    //Instantiate Funds_transferApi
    $api_instance = new ft_100\Api\Funds_transferApi();

    // Set the required payload and parameters.
    $reversefundspost_payload = new \ft_100\model\ReversefundspostPayload(); // \ft_100\model\ReversefundspostPayload

    try {
    $result = $api_instance->postreversefunds($reversefundspost_payload);
        print_r($result);
    } catch (Exception $e) {
        echo 'Exception when calling Funds_transferApi->postreversefunds: ', $e->getMessage(), PHP_EOL;
    }
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reversefundspost_payload** | [**\ft_100\model\ReversefundspostPayload**](../Model/\ft_100\model\ReversefundspostPayload.md)| Request body for creating in reverse funds transfer |

### Return type

[**\ft_100\model\ReversefundspostResponse**](../Model/ReversefundspostResponse.md)

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