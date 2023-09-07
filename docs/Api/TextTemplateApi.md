# cbeyersdorf\easybill\TextTemplateApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**textTemplatesGet()**](TextTemplateApi.md#textTemplatesGet) | **GET** /text-templates | Fetch text templates list |
| [**textTemplatesIdDelete()**](TextTemplateApi.md#textTemplatesIdDelete) | **DELETE** /text-templates/{id} | Delete text template |
| [**textTemplatesIdGet()**](TextTemplateApi.md#textTemplatesIdGet) | **GET** /text-templates/{id} | Fetch text template |
| [**textTemplatesIdPut()**](TextTemplateApi.md#textTemplatesIdPut) | **PUT** /text-templates/{id} | Update text template |
| [**textTemplatesPost()**](TextTemplateApi.md#textTemplatesPost) | **POST** /text-templates | Create text template |


## `textTemplatesGet()`

```php
textTemplatesGet($limit, $page): \cbeyersdorf\easybill\Model\TextTemplates
```

Fetch text templates list

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


$apiInstance = new cbeyersdorf\easybill\Api\TextTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.

try {
    $result = $apiInstance->textTemplatesGet($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->textTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\TextTemplates**](../Model/TextTemplates.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `textTemplatesIdDelete()`

```php
textTemplatesIdDelete($id)
```

Delete text template

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


$apiInstance = new cbeyersdorf\easybill\Api\TextTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of text template

try {
    $apiInstance->textTemplatesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->textTemplatesIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of text template | |

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

## `textTemplatesIdGet()`

```php
textTemplatesIdGet($id): \cbeyersdorf\easybill\Model\TextTemplate
```

Fetch text template

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


$apiInstance = new cbeyersdorf\easybill\Api\TextTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of text template

try {
    $result = $apiInstance->textTemplatesIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->textTemplatesIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of text template | |

### Return type

[**\cbeyersdorf\easybill\Model\TextTemplate**](../Model/TextTemplate.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `textTemplatesIdPut()`

```php
textTemplatesIdPut($id, $body): \cbeyersdorf\easybill\Model\TextTemplate
```

Update text template

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


$apiInstance = new cbeyersdorf\easybill\Api\TextTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of text template
$body = new \cbeyersdorf\easybill\Model\TextTemplate(); // \cbeyersdorf\easybill\Model\TextTemplate

try {
    $result = $apiInstance->textTemplatesIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->textTemplatesIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of text template | |
| **body** | [**\cbeyersdorf\easybill\Model\TextTemplate**](../Model/TextTemplate.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\TextTemplate**](../Model/TextTemplate.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `textTemplatesPost()`

```php
textTemplatesPost($body): \cbeyersdorf\easybill\Model\TextTemplate
```

Create text template

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


$apiInstance = new cbeyersdorf\easybill\Api\TextTemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbeyersdorf\easybill\Model\TextTemplate(); // \cbeyersdorf\easybill\Model\TextTemplate

try {
    $result = $apiInstance->textTemplatesPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TextTemplateApi->textTemplatesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\cbeyersdorf\easybill\Model\TextTemplate**](../Model/TextTemplate.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\TextTemplate**](../Model/TextTemplate.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
