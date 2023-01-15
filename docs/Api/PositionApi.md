# cbeyersdorf\easybill\PositionApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**positionsGet()**](PositionApi.md#positionsGet) | **GET** /positions | Fetch positions list |
| [**positionsIdDelete()**](PositionApi.md#positionsIdDelete) | **DELETE** /positions/{id} | Delete position |
| [**positionsIdGet()**](PositionApi.md#positionsIdGet) | **GET** /positions/{id} | Fetch position |
| [**positionsIdPut()**](PositionApi.md#positionsIdPut) | **PUT** /positions/{id} | Update position |
| [**positionsPost()**](PositionApi.md#positionsPost) | **POST** /positions | Create position |


## `positionsGet()`

```php
positionsGet($limit, $page, $type, $number): \cbeyersdorf\easybill\Model\Positions
```

Fetch positions list

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


$apiInstance = new cbeyersdorf\easybill\Api\PositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$type = 'type_example'; // string | Filter positions by type.
$number = 'number_example'; // string | Filter positions by number. You can add multiple numbers separate by comma like no,no,no.

try {
    $result = $apiInstance->positionsGet($limit, $page, $type, $number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->positionsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |
| **type** | **string**| Filter positions by type. | [optional] |
| **number** | **string**| Filter positions by number. You can add multiple numbers separate by comma like no,no,no. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\Positions**](../Model/Positions.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `positionsIdDelete()`

```php
positionsIdDelete($id)
```

Delete position

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


$apiInstance = new cbeyersdorf\easybill\Api\PositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of position

try {
    $apiInstance->positionsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->positionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of position | |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `positionsIdGet()`

```php
positionsIdGet($id): \cbeyersdorf\easybill\Model\Position
```

Fetch position

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


$apiInstance = new cbeyersdorf\easybill\Api\PositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of position

try {
    $result = $apiInstance->positionsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->positionsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of position | |

### Return type

[**\cbeyersdorf\easybill\Model\Position**](../Model/Position.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `positionsIdPut()`

```php
positionsIdPut($id, $body): \cbeyersdorf\easybill\Model\Position
```

Update position

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


$apiInstance = new cbeyersdorf\easybill\Api\PositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of position
$body = new \cbeyersdorf\easybill\Model\Position(); // \cbeyersdorf\easybill\Model\Position

try {
    $result = $apiInstance->positionsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->positionsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of position | |
| **body** | [**\cbeyersdorf\easybill\Model\Position**](../Model/Position.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\Position**](../Model/Position.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `positionsPost()`

```php
positionsPost($body): \cbeyersdorf\easybill\Model\Position
```

Create position

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


$apiInstance = new cbeyersdorf\easybill\Api\PositionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbeyersdorf\easybill\Model\Position(); // \cbeyersdorf\easybill\Model\Position

try {
    $result = $apiInstance->positionsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PositionApi->positionsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\cbeyersdorf\easybill\Model\Position**](../Model/Position.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\Position**](../Model/Position.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
