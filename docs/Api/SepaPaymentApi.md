# cbeyersdorf\easybill\SepaPaymentApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**sepaPaymentsGet()**](SepaPaymentApi.md#sepaPaymentsGet) | **GET** /sepa-payments | Fetch SEPA payments list |
| [**sepaPaymentsIdDelete()**](SepaPaymentApi.md#sepaPaymentsIdDelete) | **DELETE** /sepa-payments/{id} | Delete SEPA payment |
| [**sepaPaymentsIdGet()**](SepaPaymentApi.md#sepaPaymentsIdGet) | **GET** /sepa-payments/{id} | Fetch SEPA payment |
| [**sepaPaymentsIdPut()**](SepaPaymentApi.md#sepaPaymentsIdPut) | **PUT** /sepa-payments/{id} | Update SEPA payment |
| [**sepaPaymentsPost()**](SepaPaymentApi.md#sepaPaymentsPost) | **POST** /sepa-payments | Create SEPA payment |


## `sepaPaymentsGet()`

```php
sepaPaymentsGet($limit, $page, $document_id): \cbeyersdorf\easybill\Model\SEPAPayments
```

Fetch SEPA payments list

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


$apiInstance = new cbeyersdorf\easybill\Api\SepaPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$document_id = 'document_id_example'; // string | Filter SEPA payment by document_id. You can add multiple ids separate by comma like id,id,id.

try {
    $result = $apiInstance->sepaPaymentsGet($limit, $page, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaPaymentApi->sepaPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |
| **document_id** | **string**| Filter SEPA payment by document_id. You can add multiple ids separate by comma like id,id,id. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\SEPAPayments**](../Model/SEPAPayments.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sepaPaymentsIdDelete()`

```php
sepaPaymentsIdDelete($id)
```

Delete SEPA payment

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


$apiInstance = new cbeyersdorf\easybill\Api\SepaPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of SPEA payment

try {
    $apiInstance->sepaPaymentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SepaPaymentApi->sepaPaymentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of SPEA payment | |

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

## `sepaPaymentsIdGet()`

```php
sepaPaymentsIdGet($id): \cbeyersdorf\easybill\Model\SEPAPayment
```

Fetch SEPA payment

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


$apiInstance = new cbeyersdorf\easybill\Api\SepaPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of SEPA payment

try {
    $result = $apiInstance->sepaPaymentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaPaymentApi->sepaPaymentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of SEPA payment | |

### Return type

[**\cbeyersdorf\easybill\Model\SEPAPayment**](../Model/SEPAPayment.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sepaPaymentsIdPut()`

```php
sepaPaymentsIdPut($id, $body): \cbeyersdorf\easybill\Model\SEPAPayment
```

Update SEPA payment

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


$apiInstance = new cbeyersdorf\easybill\Api\SepaPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of SEPA payment
$body = new \cbeyersdorf\easybill\Model\SEPAPayment(); // \cbeyersdorf\easybill\Model\SEPAPayment

try {
    $result = $apiInstance->sepaPaymentsIdPut($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaPaymentApi->sepaPaymentsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of SEPA payment | |
| **body** | [**\cbeyersdorf\easybill\Model\SEPAPayment**](../Model/SEPAPayment.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\SEPAPayment**](../Model/SEPAPayment.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `sepaPaymentsPost()`

```php
sepaPaymentsPost($body): \cbeyersdorf\easybill\Model\SEPAPayment
```

Create SEPA payment

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


$apiInstance = new cbeyersdorf\easybill\Api\SepaPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbeyersdorf\easybill\Model\SEPAPayment(); // \cbeyersdorf\easybill\Model\SEPAPayment

try {
    $result = $apiInstance->sepaPaymentsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SepaPaymentApi->sepaPaymentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\cbeyersdorf\easybill\Model\SEPAPayment**](../Model/SEPAPayment.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\SEPAPayment**](../Model/SEPAPayment.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
