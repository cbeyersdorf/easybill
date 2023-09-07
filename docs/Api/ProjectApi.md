# cbeyersdorf\easybill\ProjectApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**projectsGet()**](ProjectApi.md#projectsGet) | **GET** /projects | Fetch projects list |
| [**projectsIdDelete()**](ProjectApi.md#projectsIdDelete) | **DELETE** /projects/{id} | Delete project |
| [**projectsIdGet()**](ProjectApi.md#projectsIdGet) | **GET** /projects/{id} | Fetch project |
| [**projectsIdPut()**](ProjectApi.md#projectsIdPut) | **PUT** /projects/{id} | Update project |
| [**projectsPost()**](ProjectApi.md#projectsPost) | **POST** /projects | Create project |


## `projectsGet()`

```php
projectsGet($limit, $page, $customer_id, $status): \cbeyersdorf\easybill\Model\Projects
```

Fetch projects list

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


$apiInstance = new cbeyersdorf\easybill\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$customer_id = 'customer_id_example'; // string | Filter projects by customer_id. You can add multiple ids separate by comma like id,id,id.
$status = 'status_example'; // string | Filter projects by status.

try {
    $result = $apiInstance->projectsGet($limit, $page, $customer_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |
| **customer_id** | **string**| Filter projects by customer_id. You can add multiple ids separate by comma like id,id,id. | [optional] |
| **status** | **string**| Filter projects by status. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\Projects**](../Model/Projects.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsIdDelete()`

```php
projectsIdDelete($id)
```

Delete project

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


$apiInstance = new cbeyersdorf\easybill\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of project

try {
    $apiInstance->projectsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of project | |

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

## `projectsIdGet()`

```php
projectsIdGet($id): \cbeyersdorf\easybill\Model\Project
```

Fetch project

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


$apiInstance = new cbeyersdorf\easybill\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of project

try {
    $result = $apiInstance->projectsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of project | |

### Return type

[**\cbeyersdorf\easybill\Model\Project**](../Model/Project.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsIdPut()`

```php
projectsIdPut($id, $body): \cbeyersdorf\easybill\Model\Project
```

Update project

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


$apiInstance = new cbeyersdorf\easybill\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of project
$body = new \cbeyersdorf\easybill\Model\Project(); // \cbeyersdorf\easybill\Model\Project

try {
    $result = $apiInstance->projectsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of project | |
| **body** | [**\cbeyersdorf\easybill\Model\Project**](../Model/Project.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\Project**](../Model/Project.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `projectsPost()`

```php
projectsPost($body): \cbeyersdorf\easybill\Model\Project
```

Create project

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


$apiInstance = new cbeyersdorf\easybill\Api\ProjectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbeyersdorf\easybill\Model\Project(); // \cbeyersdorf\easybill\Model\Project

try {
    $result = $apiInstance->projectsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProjectApi->projectsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\cbeyersdorf\easybill\Model\Project**](../Model/Project.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\Project**](../Model/Project.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
