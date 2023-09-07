# cbeyersdorf\easybill\DocumentPaymentApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**documentPaymentsGet()**](DocumentPaymentApi.md#documentPaymentsGet) | **GET** /document-payments | Fetch document payments list |
| [**documentPaymentsIdDelete()**](DocumentPaymentApi.md#documentPaymentsIdDelete) | **DELETE** /document-payments/{id} | Delete document payment |
| [**documentPaymentsIdGet()**](DocumentPaymentApi.md#documentPaymentsIdGet) | **GET** /document-payments/{id} | Fetch document payment |
| [**documentPaymentsPost()**](DocumentPaymentApi.md#documentPaymentsPost) | **POST** /document-payments | Create document payment |


## `documentPaymentsGet()`

```php
documentPaymentsGet($limit, $page, $document_id, $payment_at, $reference): \cbeyersdorf\easybill\Model\DocumentPayments
```

Fetch document payments list

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$document_id = 'document_id_example'; // string | Filter payments by document_id. You can add multiple ids separate by comma like id,id,id.
$payment_at = 'payment_at_example'; // string | Filter payments by payment_at. You can filter one date with payment_at=2014-12-10 or between like 2015-01-01,2015-12-31.
$reference = 'reference_example'; // string | Filter payments by reference. You can add multiple references separate by comma like id,id,id.

try {
    $result = $apiInstance->documentPaymentsGet($limit, $page, $document_id, $payment_at, $reference);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentPaymentApi->documentPaymentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |
| **document_id** | **string**| Filter payments by document_id. You can add multiple ids separate by comma like id,id,id. | [optional] |
| **payment_at** | **string**| Filter payments by payment_at. You can filter one date with payment_at&#x3D;2014-12-10 or between like 2015-01-01,2015-12-31. | [optional] |
| **reference** | **string**| Filter payments by reference. You can add multiple references separate by comma like id,id,id. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\DocumentPayments**](../Model/DocumentPayments.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentPaymentsIdDelete()`

```php
documentPaymentsIdDelete($id)
```

Delete document payment

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document payment

try {
    $apiInstance->documentPaymentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentPaymentApi->documentPaymentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document payment | |

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

## `documentPaymentsIdGet()`

```php
documentPaymentsIdGet($id): \cbeyersdorf\easybill\Model\DocumentPayment
```

Fetch document payment

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document payment

try {
    $result = $apiInstance->documentPaymentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentPaymentApi->documentPaymentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document payment | |

### Return type

[**\cbeyersdorf\easybill\Model\DocumentPayment**](../Model/DocumentPayment.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentPaymentsPost()`

```php
documentPaymentsPost($body, $paid): \cbeyersdorf\easybill\Model\DocumentPayment
```

Create document payment

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentPaymentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbeyersdorf\easybill\Model\DocumentPayment(); // \cbeyersdorf\easybill\Model\DocumentPayment
$paid = True; // bool | Mark document as paid when amount less then payment amount.

try {
    $result = $apiInstance->documentPaymentsPost($body, $paid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentPaymentApi->documentPaymentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\cbeyersdorf\easybill\Model\DocumentPayment**](../Model/DocumentPayment.md)|  | |
| **paid** | **bool**| Mark document as paid when amount less then payment amount. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\DocumentPayment**](../Model/DocumentPayment.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
