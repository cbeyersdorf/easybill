# cbeyersdorf\easybill\PdfTemplatesApi

All URIs are relative to https://api.easybill.de/rest/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**pdfTemplatesGet()**](PdfTemplatesApi.md#pdfTemplatesGet) | **GET** /pdf-templates | Fetch PDF Templates list |


## `pdfTemplatesGet()`

```php
pdfTemplatesGet($type): \cbeyersdorf\easybill\Model\PDFTemplates
```

Fetch PDF Templates list

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


$apiInstance = new cbeyersdorf\easybill\Api\PdfTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$type = array('type_example'); // string[] | Filters the templates by the specified type. You can specify several types comma-separated, like type,type,type.

try {
    $result = $apiInstance->pdfTemplatesGet($type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PdfTemplatesApi->pdfTemplatesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **type** | [**string[]**](../Model/string.md)| Filters the templates by the specified type. You can specify several types comma-separated, like type,type,type. | [optional] |

### Return type

[**\cbeyersdorf\easybill\Model\PDFTemplates**](../Model/PDFTemplates.md)

### Authorization

[basicAuth](../../README.md#basicAuth), [Bearer](../../README.md#Bearer)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
