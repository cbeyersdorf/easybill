# cbeyersdorf\easybill\StockApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**stocksGet()**](StockApi.md#stocksGet) | **GET** /stocks | Fetch a list of stock entries for positions |
| [**stocksIdGet()**](StockApi.md#stocksIdGet) | **GET** /stocks/{id} | Fetch an stock entry for a position |
| [**stocksPost()**](StockApi.md#stocksPost) | **POST** /stocks | Create a stock entry for a position |


## `stocksGet()`

```php
stocksGet($limit, $page, $position_id, $document_id): \cbeyersdorf\easybill\Model\Stocks
```

Fetch a list of stock entries for positions

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


$apiInstance = new cbeyersdorf\easybill\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$position_id = 'position_id_example'; // string | Filter stock entries by position id.
$document_id = 'document_id_example'; // string | Filter stock entries by document id.

try {
    $result = $apiInstance->stocksGet($limit, $page, $position_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockApi->stocksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |
| **position_id** | **string**| Filter stock entries by position id. | [optional] |
| **document_id** | **string**| Filter stock entries by document id. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\Stocks**](../Model/Stocks.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stocksIdGet()`

```php
stocksIdGet($id): \cbeyersdorf\easybill\Model\Stock
```

Fetch an stock entry for a position

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


$apiInstance = new cbeyersdorf\easybill\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of the stock entry that needs to be fetched

try {
    $result = $apiInstance->stocksIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockApi->stocksIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of the stock entry that needs to be fetched | |

### Return type

[**\cbeyersdorf\easybill\Model\Stock**](../Model/Stock.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `stocksPost()`

```php
stocksPost($body): \cbeyersdorf\easybill\Model\Stock
```

Create a stock entry for a position

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


$apiInstance = new cbeyersdorf\easybill\Api\StockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbeyersdorf\easybill\Model\Stock(); // \cbeyersdorf\easybill\Model\Stock

try {
    $result = $apiInstance->stocksPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling StockApi->stocksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\cbeyersdorf\easybill\Model\Stock**](../Model/Stock.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\Stock**](../Model/Stock.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
