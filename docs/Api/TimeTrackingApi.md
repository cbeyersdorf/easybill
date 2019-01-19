# cbeyersdorf\easybill\TimeTrackingApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**timeTrackingsGet**](TimeTrackingApi.md#timeTrackingsGet) | **GET** /time-trackings | Fetch time trackings list
[**timeTrackingsIdDelete**](TimeTrackingApi.md#timeTrackingsIdDelete) | **DELETE** /time-trackings/{id} | Delete time tracking
[**timeTrackingsIdGet**](TimeTrackingApi.md#timeTrackingsIdGet) | **GET** /time-trackings/{id} | Fetch time tracking
[**timeTrackingsIdPut**](TimeTrackingApi.md#timeTrackingsIdPut) | **PUT** /time-trackings/{id} | Update time tracking
[**timeTrackingsPost**](TimeTrackingApi.md#timeTrackingsPost) | **POST** /time-trackings | Create time tracking


# **timeTrackingsGet**
> \cbeyersdorf\easybill\Model\TimeTrackings timeTrackingsGet($limit, $page, $login_id, $project_id)

Fetch time trackings list

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


$apiInstance = new cbeyersdorf\easybill\Api\TimeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$login_id = "login_id_example"; // string | Filter time-tracking by login_id. You can add multiple ids separate by comma like id,id,id.
$project_id = "project_id_example"; // string | Filter time-tracking by project_id. You can add multiple ids separate by comma like id,id,id.

try {
    $result = $apiInstance->timeTrackingsGet($limit, $page, $login_id, $project_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **page** | **int**| Set current Page. Default is 1. | [optional]
 **login_id** | **string**| Filter time-tracking by login_id. You can add multiple ids separate by comma like id,id,id. | [optional]
 **project_id** | **string**| Filter time-tracking by project_id. You can add multiple ids separate by comma like id,id,id. | [optional]

### Return type

[**\cbeyersdorf\easybill\Model\TimeTrackings**](../Model/TimeTrackings.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTrackingsIdDelete**
> timeTrackingsIdDelete($id)

Delete time tracking

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


$apiInstance = new cbeyersdorf\easybill\Api\TimeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of time tracking

try {
    $apiInstance->timeTrackingsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of time tracking |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTrackingsIdGet**
> \cbeyersdorf\easybill\Model\TimeTracking timeTrackingsIdGet($id)

Fetch time tracking

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


$apiInstance = new cbeyersdorf\easybill\Api\TimeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of time tracking

try {
    $result = $apiInstance->timeTrackingsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of time tracking |

### Return type

[**\cbeyersdorf\easybill\Model\TimeTracking**](../Model/TimeTracking.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTrackingsIdPut**
> \cbeyersdorf\easybill\Model\TimeTracking timeTrackingsIdPut($id, $body)

Update time tracking

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


$apiInstance = new cbeyersdorf\easybill\Api\TimeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of time tracking
$body = new \cbeyersdorf\easybill\Model\TimeTracking(); // \cbeyersdorf\easybill\Model\TimeTracking | 

try {
    $result = $apiInstance->timeTrackingsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of time tracking |
 **body** | [**\cbeyersdorf\easybill\Model\TimeTracking**](../Model/TimeTracking.md)|  |

### Return type

[**\cbeyersdorf\easybill\Model\TimeTracking**](../Model/TimeTracking.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **timeTrackingsPost**
> \cbeyersdorf\easybill\Model\TimeTracking timeTrackingsPost($body)

Create time tracking

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


$apiInstance = new cbeyersdorf\easybill\Api\TimeTrackingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbeyersdorf\easybill\Model\TimeTracking(); // \cbeyersdorf\easybill\Model\TimeTracking | 

try {
    $result = $apiInstance->timeTrackingsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\cbeyersdorf\easybill\Model\TimeTracking**](../Model/TimeTracking.md)|  |

### Return type

[**\cbeyersdorf\easybill\Model\TimeTracking**](../Model/TimeTracking.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

