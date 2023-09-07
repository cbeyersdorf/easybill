# cbeyersdorf\easybill\SerialNumberApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**serialNumbersGet()**](SerialNumberApi.md#serialNumbersGet) | **GET** /serial-numbers | Fetch a list of serial numbers for positions |
| [**serialNumbersIdDelete()**](SerialNumberApi.md#serialNumbersIdDelete) | **DELETE** /serial-numbers/{id} | Delete a serial number for a position |
| [**serialNumbersIdGet()**](SerialNumberApi.md#serialNumbersIdGet) | **GET** /serial-numbers/{id} | Fetch a serial number for a position |
| [**serialNumbersPost()**](SerialNumberApi.md#serialNumbersPost) | **POST** /serial-numbers | Create s serial number for a position |


## `serialNumbersGet()`

```php
serialNumbersGet($limit, $page, $position_id, $document_id, $in_use): \cbeyersdorf\easybill\Model\SerialNumbers
```

Fetch a list of serial numbers for positions

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


$apiInstance = new cbeyersdorf\easybill\Api\SerialNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$position_id = 'position_id_example'; // string | Filter serial numbers by position id.
$document_id = 'document_id_example'; // string | Filter serial numbers by document id.
$in_use = True; // bool | Filter serial numbers by usage.

try {
    $result = $apiInstance->serialNumbersGet($limit, $page, $position_id, $document_id, $in_use);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerialNumberApi->serialNumbersGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |
| **position_id** | **string**| Filter serial numbers by position id. | [optional] |
| **document_id** | **string**| Filter serial numbers by document id. | [optional] |
| **in_use** | **bool**| Filter serial numbers by usage. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\SerialNumbers**](../Model/SerialNumbers.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serialNumbersIdDelete()`

```php
serialNumbersIdDelete($id)
```

Delete a serial number for a position

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


$apiInstance = new cbeyersdorf\easybill\Api\SerialNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the serial number that needs to be deleted

try {
    $apiInstance->serialNumbersIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SerialNumberApi->serialNumbersIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the serial number that needs to be deleted | |

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

## `serialNumbersIdGet()`

```php
serialNumbersIdGet($id): \cbeyersdorf\easybill\Model\SerialNumber
```

Fetch a serial number for a position

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


$apiInstance = new cbeyersdorf\easybill\Api\SerialNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the serial number that needs to be fetched

try {
    $result = $apiInstance->serialNumbersIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerialNumberApi->serialNumbersIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the serial number that needs to be fetched | |

### Return type

[**\cbeyersdorf\easybill\Model\SerialNumber**](../Model/SerialNumber.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `serialNumbersPost()`

```php
serialNumbersPost($body): \cbeyersdorf\easybill\Model\SerialNumber
```

Create s serial number for a position

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


$apiInstance = new cbeyersdorf\easybill\Api\SerialNumberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbeyersdorf\easybill\Model\SerialNumber(); // \cbeyersdorf\easybill\Model\SerialNumber

try {
    $result = $apiInstance->serialNumbersPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SerialNumberApi->serialNumbersPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\cbeyersdorf\easybill\Model\SerialNumber**](../Model/SerialNumber.md)|  | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\SerialNumber**](../Model/SerialNumber.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
