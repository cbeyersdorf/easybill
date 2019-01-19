# cbeyersdorf\easybill\ContactApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customersCustomerIdContactsGet**](ContactApi.md#customersCustomerIdContactsGet) | **GET** /customers/{customerId}/contacts | Fetch customer contact list
[**customersCustomerIdContactsIdDelete**](ContactApi.md#customersCustomerIdContactsIdDelete) | **DELETE** /customers/{customerId}/contacts/{id} | Delete contact
[**customersCustomerIdContactsIdGet**](ContactApi.md#customersCustomerIdContactsIdGet) | **GET** /customers/{customerId}/contacts/{id} | Fetch contact
[**customersCustomerIdContactsIdPut**](ContactApi.md#customersCustomerIdContactsIdPut) | **PUT** /customers/{customerId}/contacts/{id} | Update Contact
[**customersCustomerIdContactsPost**](ContactApi.md#customersCustomerIdContactsPost) | **POST** /customers/{customerId}/contacts | Create new contact


# **customersCustomerIdContactsGet**
> \cbeyersdorf\easybill\Model\Contacts customersCustomerIdContactsGet($customer_id, $limit, $page)

Fetch customer contact list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure HTTP basic authorization: basicAuth
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new cbeyersdorf\easybill\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 789; // int | ID of customer that needs to be fetched
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.

try {
    $result = $apiInstance->customersCustomerIdContactsGet($customer_id, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of customer that needs to be fetched |
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **page** | **int**| Set current Page. Default is 1. | [optional]

### Return type

[**\cbeyersdorf\easybill\Model\Contacts**](../Model/Contacts.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdContactsIdDelete**
> customersCustomerIdContactsIdDelete($customer_id, $id)

Delete contact



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure HTTP basic authorization: basicAuth
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new cbeyersdorf\easybill\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 789; // int | ID of customer
$id = 789; // int | ID of contact

try {
    $apiInstance->customersCustomerIdContactsIdDelete($customer_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of customer |
 **id** | **int**| ID of contact |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdContactsIdGet**
> \cbeyersdorf\easybill\Model\Contact customersCustomerIdContactsIdGet($customer_id, $id)

Fetch contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure HTTP basic authorization: basicAuth
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new cbeyersdorf\easybill\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 789; // int | ID of customer
$id = 789; // int | ID of contact

try {
    $result = $apiInstance->customersCustomerIdContactsIdGet($customer_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of customer |
 **id** | **int**| ID of contact |

### Return type

[**\cbeyersdorf\easybill\Model\Contact**](../Model/Contact.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdContactsIdPut**
> \cbeyersdorf\easybill\Model\Contact customersCustomerIdContactsIdPut($customer_id, $id, $body)

Update Contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure HTTP basic authorization: basicAuth
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new cbeyersdorf\easybill\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 789; // int | ID of customer
$id = 789; // int | ID of contact
$body = new \cbeyersdorf\easybill\Model\Contact(); // \cbeyersdorf\easybill\Model\Contact | 

try {
    $result = $apiInstance->customersCustomerIdContactsIdPut($customer_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of customer |
 **id** | **int**| ID of contact |
 **body** | [**\cbeyersdorf\easybill\Model\Contact**](../Model/Contact.md)|  | [optional]

### Return type

[**\cbeyersdorf\easybill\Model\Contact**](../Model/Contact.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **customersCustomerIdContactsPost**
> \cbeyersdorf\easybill\Model\Contact customersCustomerIdContactsPost($customer_id, $body)

Create new contact

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: Bearer
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
// Configure HTTP basic authorization: basicAuth
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new cbeyersdorf\easybill\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 789; // int | ID of customer
$body = new \cbeyersdorf\easybill\Model\Contact(); // \cbeyersdorf\easybill\Model\Contact | 

try {
    $result = $apiInstance->customersCustomerIdContactsPost($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **customer_id** | **int**| ID of customer |
 **body** | [**\cbeyersdorf\easybill\Model\Contact**](../Model/Contact.md)|  | [optional]

### Return type

[**\cbeyersdorf\easybill\Model\Contact**](../Model/Contact.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

