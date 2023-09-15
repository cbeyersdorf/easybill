# cbeyersdorf\easybill\DocumentVersionApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**documentsIdVersionsGet()**](DocumentVersionApi.md#documentsIdVersionsGet) | **GET** /documents/{id}/versions | List all versions of a given document |
| [**documentsIdVersionsVersionIdGet()**](DocumentVersionApi.md#documentsIdVersionsVersionIdGet) | **GET** /documents/{id}/versions/{versionId} | Show a single version of a given document |
| [**documentsIdVersionsVersionIdItemsVersionItemIdDownloadGet()**](DocumentVersionApi.md#documentsIdVersionsVersionIdItemsVersionItemIdDownloadGet) | **GET** /documents/{id}/versions/{versionId}/items/{versionItemId}/download | Download a specific file for a single version of a given document |


## `documentsIdVersionsGet()`

```php
documentsIdVersionsGet($id, $limit, $page): \cbeyersdorf\easybill\Model\DocumentVersions
```

List all versions of a given document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.

try {
    $result = $apiInstance->documentsIdVersionsGet($id, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentVersionApi->documentsIdVersionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document | |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\DocumentVersions**](../Model/DocumentVersions.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsIdVersionsVersionIdGet()`

```php
documentsIdVersionsVersionIdGet($id, $version_id): \cbeyersdorf\easybill\Model\DocumentVersion
```

Show a single version of a given document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document
$version_id = 56; // int | ID of document version

try {
    $result = $apiInstance->documentsIdVersionsVersionIdGet($id, $version_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentVersionApi->documentsIdVersionsVersionIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document | |
| **version_id** | **int**| ID of document version | |

### Return type

[**\cbeyersdorf\easybill\Model\DocumentVersion**](../Model/DocumentVersion.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsIdVersionsVersionIdItemsVersionItemIdDownloadGet()`

```php
documentsIdVersionsVersionIdItemsVersionItemIdDownloadGet($id, $version_id, $version_item_id): \SplFileObject
```

Download a specific file for a single version of a given document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentVersionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document
$version_id = 56; // int | ID of document version
$version_item_id = 56; // int | ID of document version item

try {
    $result = $apiInstance->documentsIdVersionsVersionIdItemsVersionItemIdDownloadGet($id, $version_id, $version_item_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentVersionApi->documentsIdVersionsVersionIdItemsVersionItemIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document | |
| **version_id** | **int**| ID of document version | |
| **version_item_id** | **int**| ID of document version item | |

### Return type

**\SplFileObject**

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `text/xml`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
