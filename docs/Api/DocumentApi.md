# cbeyersdorf\easybill\DocumentApi

All URIs are relative to *https://api.easybill.de/rest/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**documentsGet**](DocumentApi.md#documentsGet) | **GET** /documents | Fetch documents list
[**documentsIdCancelPost**](DocumentApi.md#documentsIdCancelPost) | **POST** /documents/{id}/cancel | Cancel document
[**documentsIdDelete**](DocumentApi.md#documentsIdDelete) | **DELETE** /documents/{id} | Delete document
[**documentsIdDonePut**](DocumentApi.md#documentsIdDonePut) | **PUT** /documents/{id}/done | To complete a document.
[**documentsIdGet**](DocumentApi.md#documentsIdGet) | **GET** /documents/{id} | Fetch document
[**documentsIdPdfGet**](DocumentApi.md#documentsIdPdfGet) | **GET** /documents/{id}/pdf | Fetch pdf document
[**documentsIdPut**](DocumentApi.md#documentsIdPut) | **PUT** /documents/{id} | Update document
[**documentsIdSendTypePost**](DocumentApi.md#documentsIdSendTypePost) | **POST** /documents/{id}/send/{type} | Send document
[**documentsPost**](DocumentApi.md#documentsPost) | **POST** /documents | Create document


# **documentsGet**
> \cbeyersdorf\easybill\Model\Documents documentsGet($limit, $page, $type, $is_draft, $is_archive, $customer_id, $project_id, $document_date, $paid_at, $title, $number, $cancel_id, $fulfillment_country, $vat_country, $shipping_country, $status)

Fetch documents list

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.
$type = "type_example"; // string | Filter documents by type. Multiple typs seperate with , like type=INVOICE,CREDIT.
$is_draft = "is_draft_example"; // string | Filter documents by draft flag.
$is_archive = "is_archive_example"; // string | Filter documents by archive flag.
$customer_id = "customer_id_example"; // string | Filter documents by customer_id. You can add multiple customer_is separate by comma like id,id,id.
$project_id = "project_id_example"; // string | Filter documents by project_id. You can add multiple project_id separate by comma like id,id,id.
$document_date = "document_date_example"; // string | Filter documents by document_date. You can filter one date with document_date=2014-12-10 or between like 2015-01-01,2015-12-31.
$paid_at = "paid_at_example"; // string | Filter documents by paid_at. You can filter one date with paid_at=2014-12-10 or between like 2015-01-01,2015-12-31. With paid_at=null you get all unpaid documents.
$title = "title_example"; // string | Filter documents by title.
$number = "number_example"; // string | Filter documents by number.
$cancel_id = "cancel_id_example"; // string | Filter documents by cancel_id. You can add multiple ids separate by comma like id,id,id. With cancel_id=null you get all not canceled documents.
$fulfillment_country = "fulfillment_country_example"; // string | Filter documents by fulfillment_country.
$vat_country = "vat_country_example"; // string | Filter documents by vat_country.
$shipping_country = "shipping_country_example"; // string | Filter documents by shipping_country.
$status = "status_example"; // string | Filter documents by status. Keep in mind that not every document type has a status.

try {
    $result = $apiInstance->documentsGet($limit, $page, $type, $is_draft, $is_archive, $customer_id, $project_id, $document_date, $paid_at, $title, $number, $cancel_id, $fulfillment_country, $vat_country, $shipping_country, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**| Limited the result. Default is 100. Maximum can be 1000. | [optional]
 **page** | **int**| Set current Page. Default is 1. | [optional]
 **type** | **string**| Filter documents by type. Multiple typs seperate with , like type&#x3D;INVOICE,CREDIT. | [optional]
 **is_draft** | **string**| Filter documents by draft flag. | [optional]
 **is_archive** | **string**| Filter documents by archive flag. | [optional]
 **customer_id** | **string**| Filter documents by customer_id. You can add multiple customer_is separate by comma like id,id,id. | [optional]
 **project_id** | **string**| Filter documents by project_id. You can add multiple project_id separate by comma like id,id,id. | [optional]
 **document_date** | **string**| Filter documents by document_date. You can filter one date with document_date&#x3D;2014-12-10 or between like 2015-01-01,2015-12-31. | [optional]
 **paid_at** | **string**| Filter documents by paid_at. You can filter one date with paid_at&#x3D;2014-12-10 or between like 2015-01-01,2015-12-31. With paid_at&#x3D;null you get all unpaid documents. | [optional]
 **title** | **string**| Filter documents by title. | [optional]
 **number** | **string**| Filter documents by number. | [optional]
 **cancel_id** | **string**| Filter documents by cancel_id. You can add multiple ids separate by comma like id,id,id. With cancel_id&#x3D;null you get all not canceled documents. | [optional]
 **fulfillment_country** | **string**| Filter documents by fulfillment_country. | [optional]
 **vat_country** | **string**| Filter documents by vat_country. | [optional]
 **shipping_country** | **string**| Filter documents by shipping_country. | [optional]
 **status** | **string**| Filter documents by status. Keep in mind that not every document type has a status. | [optional]

### Return type

[**\cbeyersdorf\easybill\Model\Documents**](../Model/Documents.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsIdCancelPost**
> \cbeyersdorf\easybill\Model\Document documentsIdCancelPost($id)

Cancel document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of document

try {
    $result = $apiInstance->documentsIdCancelPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdCancelPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of document |

### Return type

[**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsIdDelete**
> documentsIdDelete($id)

Delete document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of document

try {
    $apiInstance->documentsIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of document |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsIdDonePut**
> \cbeyersdorf\easybill\Model\Document documentsIdDonePut($id)

To complete a document.

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of document

try {
    $result = $apiInstance->documentsIdDonePut($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdDonePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of document |

### Return type

[**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsIdGet**
> \cbeyersdorf\easybill\Model\Document documentsIdGet($id)

Fetch document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of document

try {
    $result = $apiInstance->documentsIdGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of document |

### Return type

[**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsIdPdfGet**
> string documentsIdPdfGet($id)

Fetch pdf document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of document

try {
    $result = $apiInstance->documentsIdPdfGet($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdPdfGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of document |

### Return type

**string**

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsIdPut**
> \cbeyersdorf\easybill\Model\Document documentsIdPut($id, $body, $refresh_customer_data)

Update document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of document
$body = new \cbeyersdorf\easybill\Model\Document(); // \cbeyersdorf\easybill\Model\Document | 
$refresh_customer_data = true; // bool | Forces refreshing of the customer data.

try {
    $result = $apiInstance->documentsIdPut($id, $body, $refresh_customer_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of document |
 **body** | [**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)|  |
 **refresh_customer_data** | **bool**| Forces refreshing of the customer data. | [optional]

### Return type

[**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsIdSendTypePost**
> documentsIdSendTypePost($id, $type, $body)

Send document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 789; // int | ID of document
$type = "type_example"; // string | 
$body = new \cbeyersdorf\easybill\Model\PostBoxRequest(); // \cbeyersdorf\easybill\Model\PostBoxRequest | 

try {
    $apiInstance->documentsIdSendTypePost($id, $type, $body);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsIdSendTypePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| ID of document |
 **type** | **string**|  |
 **body** | [**\cbeyersdorf\easybill\Model\PostBoxRequest**](../Model/PostBoxRequest.md)|  |

### Return type

void (empty response body)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **documentsPost**
> \cbeyersdorf\easybill\Model\Document documentsPost($body)

Create document

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


$apiInstance = new cbeyersdorf\easybill\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \cbeyersdorf\easybill\Model\Document(); // \cbeyersdorf\easybill\Model\Document | 

try {
    $result = $apiInstance->documentsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->documentsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)|  |

### Return type

[**\cbeyersdorf\easybill\Model\Document**](../Model/Document.md)

### Authorization

[Bearer](../../README.md#Bearer), [basicAuth](../../README.md#basicAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

