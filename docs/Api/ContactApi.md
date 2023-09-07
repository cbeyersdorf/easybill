# cbeyersdorf\easybill\ContactApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customersCustomerIdContactsGet()**](ContactApi.md#customersCustomerIdContactsGet) | **GET** /customers/{customerId}/contacts | Fetch customer contact list |
| [**customersCustomerIdContactsIdDelete()**](ContactApi.md#customersCustomerIdContactsIdDelete) | **DELETE** /customers/{customerId}/contacts/{id} | Delete contact |
| [**customersCustomerIdContactsIdGet()**](ContactApi.md#customersCustomerIdContactsIdGet) | **GET** /customers/{customerId}/contacts/{id} | Fetch contact |
| [**customersCustomerIdContactsIdPut()**](ContactApi.md#customersCustomerIdContactsIdPut) | **PUT** /customers/{customerId}/contacts/{id} | Update Contact |
| [**customersCustomerIdContactsPost()**](ContactApi.md#customersCustomerIdContactsPost) | **POST** /customers/{customerId}/contacts | Create new contact |


## `customersCustomerIdContactsGet()`

```php
customersCustomerIdContactsGet($customer_id, $limit, $page): \cbeyersdorf\easybill\Model\Contacts
```

Fetch customer contact list

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: Bearer
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new cbeyersdorf\easybill\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | ID of customer that needs to be fetched
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.

try {
    $result = $apiInstance->customersCustomerIdContactsGet($customer_id, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **int**| ID of customer that needs to be fetched | |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\Contacts**](../Model/Contacts.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersCustomerIdContactsIdDelete()`

```php
customersCustomerIdContactsIdDelete($customer_id, $id)
```

Delete contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: Bearer
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new cbeyersdorf\easybill\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | ID of customer
$id = 56; // int | ID of contact

try {
    $apiInstance->customersCustomerIdContactsIdDelete($customer_id, $id);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **int**| ID of customer | |
| **id** | **int**| ID of contact | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersCustomerIdContactsIdGet()`

```php
customersCustomerIdContactsIdGet($customer_id, $id): \cbeyersdorf\easybill\Model\Contact
```

Fetch contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: Bearer
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new cbeyersdorf\easybill\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | ID of customer
$id = 56; // int | ID of contact

try {
    $result = $apiInstance->customersCustomerIdContactsIdGet($customer_id, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **int**| ID of customer | |
| **id** | **int**| ID of contact | |

### Return type

[**\cbeyersdorf\easybill\Model\Contact**](../Model/Contact.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersCustomerIdContactsIdPut()`

```php
customersCustomerIdContactsIdPut($customer_id, $id, $body): \cbeyersdorf\easybill\Model\Contact
```

Update Contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: Bearer
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new cbeyersdorf\easybill\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | ID of customer
$id = 56; // int | ID of contact
$body = new \cbeyersdorf\easybill\Model\Contact(); // \cbeyersdorf\easybill\Model\Contact

try {
    $result = $apiInstance->customersCustomerIdContactsIdPut($customer_id, $id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **int**| ID of customer | |
| **id** | **int**| ID of contact | |
| **body** | [**\cbeyersdorf\easybill\Model\Contact**](../Model/Contact.md)|  | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\Contact**](../Model/Contact.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersCustomerIdContactsPost()`

```php
customersCustomerIdContactsPost($customer_id, $body): \cbeyersdorf\easybill\Model\Contact
```

Create new contact

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basicAuth
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');

// Configure API key authorization: Bearer
$config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = cbeyersdorf\easybill\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');


$apiInstance = new cbeyersdorf\easybill\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_id = 56; // int | ID of customer
$body = new \cbeyersdorf\easybill\Model\Contact(); // \cbeyersdorf\easybill\Model\Contact

try {
    $result = $apiInstance->customersCustomerIdContactsPost($customer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->customersCustomerIdContactsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_id** | **int**| ID of customer | |
| **body** | [**\cbeyersdorf\easybill\Model\Contact**](../Model/Contact.md)|  | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\Contact**](../Model/Contact.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
