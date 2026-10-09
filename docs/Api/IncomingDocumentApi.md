# cbeyersdorf\easybill\IncomingDocumentApi



All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**incomingDocumentsGet()**](IncomingDocumentApi.md#incomingDocumentsGet) | **GET** /incoming-documents | Fetch incoming documents list |
| [**incomingDocumentsIdFilesFileIdDownloadGet()**](IncomingDocumentApi.md#incomingDocumentsIdFilesFileIdDownloadGet) | **GET** /incoming-documents/{id}/files/{fileId}/download | Download a file attached to an incoming document |
| [**incomingDocumentsIdFilesGet()**](IncomingDocumentApi.md#incomingDocumentsIdFilesGet) | **GET** /incoming-documents/{id}/files | Fetch files list for an incoming document |
| [**incomingDocumentsIdGet()**](IncomingDocumentApi.md#incomingDocumentsIdGet) | **GET** /incoming-documents/{id} | Fetch incoming document |


## `incomingDocumentsGet()`

```php
incomingDocumentsGet($limit, $page, $sort, $created_at): \cbeyersdorf\easybill\Model\IncomingDocuments
```

Fetch incoming documents list

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


$apiInstance = new cbeyersdorf\easybill\Api\IncomingDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$sort = 'ASC'; // string | Sort direction for created_at. Default is ASC.
$created_at = 'created_at_example'; // string | Filter incoming documents by created_at. You can filter one date with created_at=2024-01-15, an exact date-time with created_at=2024-01-15 10:30:00 or between like 2024-01-01,2024-12-31.

try {
    $result = $apiInstance->incomingDocumentsGet($limit, $page, $sort, $created_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingDocumentApi->incomingDocumentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |
| **sort** | **string**| Sort direction for created_at. Default is ASC. | [optional] [default to &#39;ASC&#39;] |
| **created_at** | **string**| Filter incoming documents by created_at. You can filter one date with created_at&#x3D;2024-01-15, an exact date-time with created_at&#x3D;2024-01-15 10:30:00 or between like 2024-01-01,2024-12-31. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\IncomingDocuments**](../Model/IncomingDocuments.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingDocumentsIdFilesFileIdDownloadGet()`

```php
incomingDocumentsIdFilesFileIdDownloadGet($id, $file_id): \SplFileObject
```

Download a file attached to an incoming document

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


$apiInstance = new cbeyersdorf\easybill\Api\IncomingDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | UUID of the incoming document
$file_id = 'file_id_example'; // string | UUID of the file

try {
    $result = $apiInstance->incomingDocumentsIdFilesFileIdDownloadGet($id, $file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingDocumentApi->incomingDocumentsIdFilesFileIdDownloadGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| UUID of the incoming document | |
| **file_id** | **string**| UUID of the file | |

### Return type

**\SplFileObject**

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/octet-stream`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingDocumentsIdFilesGet()`

```php
incomingDocumentsIdFilesGet($id, $limit, $page): \cbeyersdorf\easybill\Model\IncomingDocumentFiles
```

Fetch files list for an incoming document

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


$apiInstance = new cbeyersdorf\easybill\Api\IncomingDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | UUID of the incoming document
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.

try {
    $result = $apiInstance->incomingDocumentsIdFilesGet($id, $limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingDocumentApi->incomingDocumentsIdFilesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| UUID of the incoming document | |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\IncomingDocumentFiles**](../Model/IncomingDocumentFiles.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `incomingDocumentsIdGet()`

```php
incomingDocumentsIdGet($id): \cbeyersdorf\easybill\Model\IncomingDocument
```

Fetch incoming document

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


$apiInstance = new cbeyersdorf\easybill\Api\IncomingDocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | UUID of the incoming document

try {
    $result = $apiInstance->incomingDocumentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling IncomingDocumentApi->incomingDocumentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| UUID of the incoming document | |

### Return type

[**\cbeyersdorf\easybill\Model\IncomingDocument**](../Model/IncomingDocument.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
