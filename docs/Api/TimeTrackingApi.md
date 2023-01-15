# cbeyersdorf\easybill\TimeTrackingApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**timeTrackingsGet()**](TimeTrackingApi.md#timeTrackingsGet) | **GET** /time-trackings | Fetch time trackings list |
| [**timeTrackingsIdDelete()**](TimeTrackingApi.md#timeTrackingsIdDelete) | **DELETE** /time-trackings/{id} | Delete time tracking |
| [**timeTrackingsIdGet()**](TimeTrackingApi.md#timeTrackingsIdGet) | **GET** /time-trackings/{id} | Fetch time tracking |
| [**timeTrackingsIdPut()**](TimeTrackingApi.md#timeTrackingsIdPut) | **PUT** /time-trackings/{id} | Update time tracking |
| [**timeTrackingsPost()**](TimeTrackingApi.md#timeTrackingsPost) | **POST** /time-trackings | Create time tracking |


## `timeTrackingsGet()`

```php
timeTrackingsGet($limit, $page, $login_id, $project_id, $date_from_at, $date_thru_at): \cbeyersdorf\easybill\Model\TimeTrackings
```

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
$login_id = 'login_id_example'; // string | Filter time-tracking by login_id. You can add multiple ids separate by comma like id,id,id.
$project_id = 'project_id_example'; // string | Filter time-tracking by project_id. You can add multiple ids separate by comma like id,id,id.
$date_from_at = 'date_from_at_example'; // string | Filter time-tracking by date_from_at. You can filter one date with date_from_at=2014-12-10 or between like 2015-01-01,2015-12-31. You can also specify a specific time with date_from_at=2014-12-10 12:30:00 or between like 2015-01-01 12:30:00,2015-01-01 13:00:00.
$date_thru_at = 'date_thru_at_example'; // string | Filter time-tracking by date_thru_at. You can filter one date with date_thru_at=2014-12-10 or between like 2015-01-01,2015-12-31. You can also specify a specific time with date_thru_at=2014-12-10 12:30:00 or between like 2015-01-01 12:30:00,2015-01-01 13:00:00.

try {
    $result = $apiInstance->timeTrackingsGet($limit, $page, $login_id, $project_id, $date_from_at, $date_thru_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |
| **login_id** | **string**| Filter time-tracking by login_id. You can add multiple ids separate by comma like id,id,id. | [optional] |
| **project_id** | **string**| Filter time-tracking by project_id. You can add multiple ids separate by comma like id,id,id. | [optional] |
| **date_from_at** | **string**| Filter time-tracking by date_from_at. You can filter one date with date_from_at&#x3D;2014-12-10 or between like 2015-01-01,2015-12-31. You can also specify a specific time with date_from_at&#x3D;2014-12-10 12:30:00 or between like 2015-01-01 12:30:00,2015-01-01 13:00:00. | [optional] |
| **date_thru_at** | **string**| Filter time-tracking by date_thru_at. You can filter one date with date_thru_at&#x3D;2014-12-10 or between like 2015-01-01,2015-12-31. You can also specify a specific time with date_thru_at&#x3D;2014-12-10 12:30:00 or between like 2015-01-01 12:30:00,2015-01-01 13:00:00. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\TimeTrackings**](../Model/TimeTrackings.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeTrackingsIdDelete()`

```php
timeTrackingsIdDelete($id)
```

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
$id = 56; // int | ID of time tracking

try {
    $apiInstance->timeTrackingsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of time tracking | |

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

## `timeTrackingsIdGet()`

```php
timeTrackingsIdGet($id): \cbeyersdorf\easybill\Model\TimeTracking
```

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
$id = 56; // int | ID of time tracking

try {
    $result = $apiInstance->timeTrackingsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of time tracking | |

### Return type

[**\cbeyersdorf\easybill\Model\TimeTracking**](../Model/TimeTracking.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeTrackingsIdPut()`

```php
timeTrackingsIdPut($id, $body): \cbeyersdorf\easybill\Model\TimeTracking
```

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
$id = 56; // int | ID of time tracking
$body = new \cbeyersdorf\easybill\Model\TimeTracking(); // \cbeyersdorf\easybill\Model\TimeTracking

try {
    $result = $apiInstance->timeTrackingsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of time tracking | |
| **body** | [**\cbeyersdorf\easybill\Model\TimeTracking**](../Model/TimeTracking.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\TimeTracking**](../Model/TimeTracking.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `timeTrackingsPost()`

```php
timeTrackingsPost($body): \cbeyersdorf\easybill\Model\TimeTracking
```

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
$body = new \cbeyersdorf\easybill\Model\TimeTracking(); // \cbeyersdorf\easybill\Model\TimeTracking

try {
    $result = $apiInstance->timeTrackingsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TimeTrackingApi->timeTrackingsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\cbeyersdorf\easybill\Model\TimeTracking**](../Model/TimeTracking.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\TimeTracking**](../Model/TimeTracking.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
