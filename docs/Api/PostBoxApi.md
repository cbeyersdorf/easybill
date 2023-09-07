# cbeyersdorf\easybill\PostBoxApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**postBoxesGet()**](PostBoxApi.md#postBoxesGet) | **GET** /post-boxes | Fetch post box list |
| [**postBoxesIdDelete()**](PostBoxApi.md#postBoxesIdDelete) | **DELETE** /post-boxes/{id} | Delete post box |
| [**postBoxesIdGet()**](PostBoxApi.md#postBoxesIdGet) | **GET** /post-boxes/{id} | Fetch post box |


## `postBoxesGet()`

```php
postBoxesGet($limit, $page, $type, $status, $document_id): \cbeyersdorf\easybill\Model\PostBoxes
```

Fetch post box list

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


$apiInstance = new cbeyersdorf\easybill\Api\PostBoxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$type = 'type_example'; // string | Filter post boxes by type. Multiple typs seperate with , like type=EMAIL,FAX.
$status = 'status_example'; // string | Filter post boxes by status.
$document_id = 'document_id_example'; // string | Filter post boxes by document_id. You can add multiple document ids separate by comma like id,id,id.

try {
    $result = $apiInstance->postBoxesGet($limit, $page, $type, $status, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostBoxApi->postBoxesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |
| **type** | **string**| Filter post boxes by type. Multiple typs seperate with , like type&#x3D;EMAIL,FAX. | [optional] |
| **status** | **string**| Filter post boxes by status. | [optional] |
| **document_id** | **string**| Filter post boxes by document_id. You can add multiple document ids separate by comma like id,id,id. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\PostBoxes**](../Model/PostBoxes.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postBoxesIdDelete()`

```php
postBoxesIdDelete($id)
```

Delete post box

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


$apiInstance = new cbeyersdorf\easybill\Api\PostBoxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of post box

try {
    $apiInstance->postBoxesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PostBoxApi->postBoxesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of post box | |

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

## `postBoxesIdGet()`

```php
postBoxesIdGet($id): \cbeyersdorf\easybill\Model\PostBox
```

Fetch post box

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


$apiInstance = new cbeyersdorf\easybill\Api\PostBoxApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of post box

try {
    $result = $apiInstance->postBoxesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PostBoxApi->postBoxesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of post box | |

### Return type

[**\cbeyersdorf\easybill\Model\PostBox**](../Model/PostBox.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
