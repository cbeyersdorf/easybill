# cbeyersdorf\easybill\DocumentApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**documentsGet()**](DocumentApi.md#documentsGet) | **GET** /documents | Fetch documents list |
| [**documentsIdCancelPost()**](DocumentApi.md#documentsIdCancelPost) | **POST** /documents/{id}/cancel | Cancel document |
| [**documentsIdDelete()**](DocumentApi.md#documentsIdDelete) | **DELETE** /documents/{id} | Delete document |
| [**documentsIdDonePut()**](DocumentApi.md#documentsIdDonePut) | **PUT** /documents/{id}/done | To complete a document. |
| [**documentsIdGet()**](DocumentApi.md#documentsIdGet) | **GET** /documents/{id} | Fetch document |
| [**documentsIdJpgGet()**](DocumentApi.md#documentsIdJpgGet) | **GET** /documents/{id}/jpg | Download a document as an jpeg-image |
| [**documentsIdPdfGet()**](DocumentApi.md#documentsIdPdfGet) | **GET** /documents/{id}/pdf | Fetch pdf document |
| [**documentsIdPut()**](DocumentApi.md#documentsIdPut) | **PUT** /documents/{id} | Update document |
| [**documentsIdSendTypePost()**](DocumentApi.md#documentsIdSendTypePost) | **POST** /documents/{id}/send/{type} | Send document |
| [**documentsIdTypePost()**](DocumentApi.md#documentsIdTypePost) | **POST** /documents/{id}/{type} | Convert an existing document to one of a different type |
| [**documentsPost()**](DocumentApi.md#documentsPost) | **POST** /documents | Create document |


## `documentsGet()`

```php
documentsGet($limit, $page, $type, $is_draft, $is_archive, $customer_id, $project_id, $ref_id, $document_date, $paid_at, $title, $number, $cancel_id, $fulfillment_country, $vat_country, $shipping_country, $status): \cbeyersdorf\easybill\Model\Documents
```

Fetch documents list

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$type = 'type_example'; // string | Filter documents by type. Multiple typs seperate with , like type=INVOICE,CREDIT.
$is_draft = 'is_draft_example'; // string | Filter documents by draft flag.
$is_archive = 'is_archive_example'; // string | Filter documents by archive flag.
$customer_id = 'customer_id_example'; // string | Filter documents by customer_id. You can add multiple customer_is separate by comma like id,id,id.
$project_id = 'project_id_example'; // string | Filter documents by project_id. You can add multiple project_id separate by comma like id,id,id.
$ref_id = 'ref_id_example'; // string | Filter documents by ref_id.
$document_date = 'document_date_example'; // string | Filter documents by document_date. You can filter one date with document_date=2014-12-10 or between like 2015-01-01,2015-12-31.
$paid_at = 'paid_at_example'; // string | Filter documents by paid_at. You can filter one date with paid_at=2014-12-10 or between like 2015-01-01,2015-12-31. With paid_at=null you get all unpaid documents.
$title = 'title_example'; // string | Filter documents by title.
$number = 'number_example'; // string | Filter documents by number.
$cancel_id = 'cancel_id_example'; // string | Filter documents by cancel_id. You can add multiple ids separate by comma like id,id,id. With cancel_id=null you get all not canceled documents.
$fulfillment_country = 'fulfillment_country_example'; // string | Filter documents by fulfillment_country.
$vat_country = 'vat_country_example'; // string | Filter documents by vat_country.
$shipping_country = 'shipping_country_example'; // string | Filter documents by shipping_country.
$status = 'status_example'; // string | Filter documents by status. Keep in mind that not every document type has a status.

try {
    $result = $apiInstance->documentsGet($limit, $page, $type, $is_draft, $is_archive, $customer_id, $project_id, $ref_id, $document_date, $paid_at, $title, $number, $cancel_id, $fulfillment_country, $vat_country, $shipping_country, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional] |
| **page** | **int**| Set current Page. Default is 1. | [optional] |
| **type** | **string**| Filter documents by type. Multiple typs seperate with , like type&#x3D;INVOICE,CREDIT. | [optional] |
| **is_draft** | **string**| Filter documents by draft flag. | [optional] |
| **is_archive** | **string**| Filter documents by archive flag. | [optional] |
| **customer_id** | **string**| Filter documents by customer_id. You can add multiple customer_is separate by comma like id,id,id. | [optional] |
| **project_id** | **string**| Filter documents by project_id. You can add multiple project_id separate by comma like id,id,id. | [optional] |
| **ref_id** | **string**| Filter documents by ref_id. | [optional] |
| **document_date** | **string**| Filter documents by document_date. You can filter one date with document_date&#x3D;2014-12-10 or between like 2015-01-01,2015-12-31. | [optional] |
| **paid_at** | **string**| Filter documents by paid_at. You can filter one date with paid_at&#x3D;2014-12-10 or between like 2015-01-01,2015-12-31. With paid_at&#x3D;null you get all unpaid documents. | [optional] |
| **title** | **string**| Filter documents by title. | [optional] |
| **number** | **string**| Filter documents by number. | [optional] |
| **cancel_id** | **string**| Filter documents by cancel_id. You can add multiple ids separate by comma like id,id,id. With cancel_id&#x3D;null you get all not canceled documents. | [optional] |
| **fulfillment_country** | **string**| Filter documents by fulfillment_country. | [optional] |
| **vat_country** | **string**| Filter documents by vat_country. | [optional] |
| **shipping_country** | **string**| Filter documents by shipping_country. | [optional] |
| **status** | **string**| Filter documents by status. Keep in mind that not every document type has a status. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\Documents**](../Model/Documents.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsIdCancelPost()`

```php
documentsIdCancelPost($id, $use_text_from_template): \cbeyersdorf\easybill\Model\Document
```

Cancel document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document
$use_text_from_template = false; // bool | Use standard texts from the template.

try {
    $result = $apiInstance->documentsIdCancelPost($id, $use_text_from_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document | |
| **use_text_from_template** | **bool**| Use standard texts from the template. | [optional] [default to false] |

### Return type

[**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsIdDelete()`

```php
documentsIdDelete($id)
```

Delete document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document

try {
    $apiInstance->documentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document | |

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

## `documentsIdDonePut()`

```php
documentsIdDonePut($id, $reason_for_change): \cbeyersdorf\easybill\Model\Document
```

To complete a document.

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document
$reason_for_change = 'reason_for_change_example'; // string | A string that is saved on the document version as reason.

try {
    $result = $apiInstance->documentsIdDonePut($id, $reason_for_change);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdDonePut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document | |
| **reason_for_change** | **string**| A string that is saved on the document version as reason. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsIdGet()`

```php
documentsIdGet($id): \cbeyersdorf\easybill\Model\Document
```

Fetch document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document

try {
    $result = $apiInstance->documentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document | |

### Return type

[**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsIdJpgGet()`

```php
documentsIdJpgGet($id, $offset, $limit): \SplFileObject
```

Download a document as an jpeg-image

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document
$offset = 56; // int | The page of the document where the image should start.
$limit = 56; // int | The page of the document where the image should end.

try {
    $result = $apiInstance->documentsIdJpgGet($id, $offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdJpgGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document | |
| **offset** | **int**| The page of the document where the image should start. | [optional] |
| **limit** | **int**| The page of the document where the image should end. | [optional] |

### Return type

**\SplFileObject**

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/jpeg`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsIdPdfGet()`

```php
documentsIdPdfGet($id): \SplFileObject
```

Fetch pdf document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document

try {
    $result = $apiInstance->documentsIdPdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdPdfGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document | |

### Return type

**\SplFileObject**

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsIdPut()`

```php
documentsIdPut($id, $body, $refresh_customer_data, $reason_for_change): \cbeyersdorf\easybill\Model\Document
```

Update document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document
$body = new \cbeyersdorf\easybill\Model\Document(); // \cbeyersdorf\easybill\Model\Document
$refresh_customer_data = True; // bool | Forces refreshing of the customer data.
$reason_for_change = 'reason_for_change_example'; // string | A string that is saved on the document version as reason. This value takes only affect if you update an already finalized document and provide this value.

try {
    $result = $apiInstance->documentsIdPut($id, $body, $refresh_customer_data, $reason_for_change);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document | |
| **body** | [**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)|  | |
| **refresh_customer_data** | **bool**| Forces refreshing of the customer data. | [optional] |
| **reason_for_change** | **string**| A string that is saved on the document version as reason. This value takes only affect if you update an already finalized document and provide this value. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsIdSendTypePost()`

```php
documentsIdSendTypePost($id, $type, $body)
```

Send document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document
$type = 'type_example'; // string
$body = new \cbeyersdorf\easybill\Model\PostBoxRequest(); // \cbeyersdorf\easybill\Model\PostBoxRequest

try {
    $apiInstance->documentsIdSendTypePost($id, $type, $body);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdSendTypePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document | |
| **type** | **string**|  | |
| **body** | [**\cbeyersdorf\easybill\Model\PostBoxRequest**](../Model/PostBoxRequest.md)|  | |

### Return type

void (empty response body)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsIdTypePost()`

```php
documentsIdTypePost($id, $type, $pdf_template): \cbeyersdorf\easybill\Model\Document
```

Convert an existing document to one of a different type

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | ID of document
$type = 'type_example'; // string | The target document type
$pdf_template = 'DE'; // string | The ID of the printer template to use. Defaults to 'DE' if not given.

try {
    $result = $apiInstance->documentsIdTypePost($id, $type, $pdf_template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdTypePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **int**| ID of document | |
| **type** | **string**| The target document type | |
| **pdf_template** | **string**| The ID of the printer template to use. Defaults to &#39;DE&#39; if not given. | [optional] [default to &#39;DE&#39;] |

### Return type

[**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `documentsPost()`

```php
documentsPost($body): \cbeyersdorf\easybill\Model\Document
```

Create document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbeyersdorf\easybill\Model\Document(); // \cbeyersdorf\easybill\Model\Document

try {
    $result = $apiInstance->documentsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **body** | [**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)|  | |

### Return type

[**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
