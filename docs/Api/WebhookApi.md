# cbeyersdorf\easybill\WebhookApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**webhooksGet()**](WebhookApi.md#webhooksGet) | **GET** /webhooks | Fetch WebHooks list |
| [**webhooksIdDelete()**](WebhookApi.md#webhooksIdDelete) | **DELETE** /webhooks/{id} | Delete WebHook |
| [**webhooksIdGet()**](WebhookApi.md#webhooksIdGet) | **GET** /webhooks/{id} | Fetch WebHook |
| [**webhooksIdPut()**](WebhookApi.md#webhooksIdPut) | **PUT** /webhooks/{id} | Update WebHook |
| [**webhooksPost()**](WebhookApi.md#webhooksPost) | **POST** /webhooks | Create WebHook |


## `webhooksGet()`

```php
webhooksGet($limit, $page): \cbeyersdorf\easybill\Model\WebHooks
```

Fetch WebHooks list

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


$apiInstance = new cbeyersdorf\easybill\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.

try {
    $result = $apiInstance->webhooksGet($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\WebHooks**](../Model/WebHooks.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksIdDelete()`

```php
webhooksIdDelete($id)
```

Delete WebHook

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


$apiInstance = new cbeyersdorf\easybill\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of WebHook

try {
    $apiInstance->webhooksIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of WebHook | |

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

## `webhooksIdGet()`

```php
webhooksIdGet($id): \cbeyersdorf\easybill\Model\WebHook
```

Fetch WebHook

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


$apiInstance = new cbeyersdorf\easybill\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of WebHook

try {
    $result = $apiInstance->webhooksIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of WebHook | |

### Return type

[**\cbeyersdorf\easybill\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksIdPut()`

```php
webhooksIdPut($id, $body): \cbeyersdorf\easybill\Model\WebHook
```

Update WebHook

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


$apiInstance = new cbeyersdorf\easybill\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of WebHook
$body = new \cbeyersdorf\easybill\Model\WebHook(); // \cbeyersdorf\easybill\Model\WebHook

try {
    $result = $apiInstance->webhooksIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of WebHook | |
| **body** | [**\cbeyersdorf\easybill\Model\WebHook**](../Model/WebHook.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksPost()`

```php
webhooksPost($body): \cbeyersdorf\easybill\Model\WebHook
```

Create WebHook

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


$apiInstance = new cbeyersdorf\easybill\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbeyersdorf\easybill\Model\WebHook(); // \cbeyersdorf\easybill\Model\WebHook

try {
    $result = $apiInstance->webhooksPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\cbeyersdorf\easybill\Model\WebHook**](../Model/WebHook.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\WebHook**](../Model/WebHook.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
