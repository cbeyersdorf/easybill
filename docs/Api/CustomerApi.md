# cbeyersdorf\easybill\CustomerApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customersGet()**](CustomerApi.md#customersGet) | **GET** /customers | Fetch customers list |
| [**customersIdDelete()**](CustomerApi.md#customersIdDelete) | **DELETE** /customers/{id} | Delete customer |
| [**customersIdGet()**](CustomerApi.md#customersIdGet) | **GET** /customers/{id} | Fetch customer |
| [**customersIdPut()**](CustomerApi.md#customersIdPut) | **PUT** /customers/{id} | Update Customer |
| [**customersPost()**](CustomerApi.md#customersPost) | **POST** /customers | Create customer |


## `customersGet()`

```php
customersGet($limit, $page, $group_id, $additional_group_id, $number, $country, $zip_code, $emails, $first_name, $last_name, $company_name, $created_at): \cbeyersdorf\easybill\Model\Customers
```

Fetch customers list

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


$apiInstance = new cbeyersdorf\easybill\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$group_id = 'group_id_example'; // string | Filter customers by group_id. You can add multiple group ids separate by comma like id,id,id.
$additional_group_id = 'additional_group_id_example'; // string | Filter customers by additional_group_id. You can add multiple group ids separate by comma like id,id,id.
$number = 'number_example'; // string | Filter customers by number. You can add multiple numbers separate by comma like no,no,no.
$country = 'country_example'; // string | Filter customers by country. You can add multiple countries separate by comma like DE,PL,FR.
$zip_code = 'zip_code_example'; // string | Filter customers by zip_code. You can add multiple zip codes separate by comma like zip,zip,zip.
$emails = 'emails_example'; // string | Filter customers by emails. You can add multiple emails separate by comma like mail,mail,mail.
$first_name = 'first_name_example'; // string | Filter customers by first_name. You can add multiple names separate by comma like name,name,name.
$last_name = 'last_name_example'; // string | Filter customers by first_name. You can add multiple names separate by comma like name,name,name.
$company_name = 'company_name_example'; // string | Filter customers by first_name. You can add multiple names separate by comma like name,name,name.
$created_at = 'created_at_example'; // string | Filter customers by created_at. You can filter one date with created_at=2014-12-10 or between like 2015-01-01,2015-12-31.

try {
    $result = $apiInstance->customersGet($limit, $page, $group_id, $additional_group_id, $number, $country, $zip_code, $emails, $first_name, $last_name, $company_name, $created_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |
| **group_id** | **string**| Filter customers by group_id. You can add multiple group ids separate by comma like id,id,id. | [optional] |
| **additional_group_id** | **string**| Filter customers by additional_group_id. You can add multiple group ids separate by comma like id,id,id. | [optional] |
| **number** | **string**| Filter customers by number. You can add multiple numbers separate by comma like no,no,no. | [optional] |
| **country** | **string**| Filter customers by country. You can add multiple countries separate by comma like DE,PL,FR. | [optional] |
| **zip_code** | **string**| Filter customers by zip_code. You can add multiple zip codes separate by comma like zip,zip,zip. | [optional] |
| **emails** | **string**| Filter customers by emails. You can add multiple emails separate by comma like mail,mail,mail. | [optional] |
| **first_name** | **string**| Filter customers by first_name. You can add multiple names separate by comma like name,name,name. | [optional] |
| **last_name** | **string**| Filter customers by first_name. You can add multiple names separate by comma like name,name,name. | [optional] |
| **company_name** | **string**| Filter customers by first_name. You can add multiple names separate by comma like name,name,name. | [optional] |
| **created_at** | **string**| Filter customers by created_at. You can filter one date with created_at&#x3D;2014-12-10 or between like 2015-01-01,2015-12-31. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\Customers**](../Model/Customers.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersIdDelete()`

```php
customersIdDelete($id)
```

Delete customer

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


$apiInstance = new cbeyersdorf\easybill\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of customer that needs to be deleted

try {
    $apiInstance->customersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of customer that needs to be deleted | |

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

## `customersIdGet()`

```php
customersIdGet($id): \cbeyersdorf\easybill\Model\Customer
```

Fetch customer

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


$apiInstance = new cbeyersdorf\easybill\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of customer that needs to be fetched

try {
    $result = $apiInstance->customersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of customer that needs to be fetched | |

### Return type

[**\cbeyersdorf\easybill\Model\Customer**](../Model/Customer.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersIdPut()`

```php
customersIdPut($id, $body): \cbeyersdorf\easybill\Model\Customer
```

Update Customer

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


$apiInstance = new cbeyersdorf\easybill\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of customer that needs to be updated
$body = new \cbeyersdorf\easybill\Model\Customer(); // \cbeyersdorf\easybill\Model\Customer

try {
    $result = $apiInstance->customersIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of customer that needs to be updated | |
| **body** | [**\cbeyersdorf\easybill\Model\Customer**](../Model/Customer.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\Customer**](../Model/Customer.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customersPost()`

```php
customersPost($body): \cbeyersdorf\easybill\Model\Customer
```

Create customer

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


$apiInstance = new cbeyersdorf\easybill\Api\CustomerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbeyersdorf\easybill\Model\Customer(); // \cbeyersdorf\easybill\Model\Customer

try {
    $result = $apiInstance->customersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomerApi->customersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\cbeyersdorf\easybill\Model\Customer**](../Model/Customer.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\Customer**](../Model/Customer.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
