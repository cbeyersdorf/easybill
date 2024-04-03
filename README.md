# easybill


The first version of the easybill REST API. [CHANGELOG](https://api.easybill.de/rest/v1/CHANGELOG.md)

## Authentication

You can choose between two available methods: `Basic Auth` or `Bearer Token`.

In each HTTP request, one of the following HTTP headers is required:

```
# Basic Auth
Authorization: Basic base64_encode('<email>:<api_key>')
# Bearer Token
Authorization: Bearer <api_key>
```

## Limitations

### Request Limit

* PLUS: 10 requests per minute
* BUSINESS: 60 requests per minute

If the limit is exceeded, you will receive the HTTP error: `429 Too Many Requests`

### Result Limit

All result lists are limited to 100 by default. This limit can be increased by the query parameter `limit` to a maximum of 1000.

## Query filter

Many list resources can be filtered. In `/documents` you can filter e.g. by number with `/documents?number=111028654`. If you want to filter multiple numbers, you can either enter them separated by commas `/documents?number=111028654,222006895` or as an array `/documents?number[]=111028654&number[]=222006895`.

**Warning**: The maximum size of an HTTP request line in bytes is 4094. If this limit is exceeded, you will receive the HTTP error: `414 Request-URI Too Large`

### Escape commas in query

You can escape commans in query `name=Patrick\\, Peter` if you submit the header `X-Easybill-Escape: true` in your request.

## Property login_id

This is the login of your admin or employee account.

## Date and Date-Time format
Please use the timezone `Europe/Berlin`.
* **date** = *Y-m-d* = `2016-12-31`
* **date-time** = *Y-m-d H:i:s* = `2016-12-31 03:13:37`

Date or datetime can be `null` because the attributes have been added later and the entry is older.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/cbeyersdorf/easybill.git"
    }
  ],
  "require": {
    "cbeyersdorf/easybill": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/easybill/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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


$apiInstance = new cbeyersdorf\easybill\Api\AttachmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int | Limited the result. Default is 100. Maximum can be 1000.
$page = 56; // int | Set current Page. Default is 1.

try {
    $result = $apiInstance->attachmentsGet($limit, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AttachmentApi->attachmentsGet: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.easybill.de/rest/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AttachmentApi* | [**attachmentsGet**](docs/Api/AttachmentApi.md#attachmentsget) | **GET** /attachments | Fetch attachments list
*AttachmentApi* | [**attachmentsIdContentGet**](docs/Api/AttachmentApi.md#attachmentsidcontentget) | **GET** /attachments/{id}/content | Fetch attachment content
*AttachmentApi* | [**attachmentsIdDelete**](docs/Api/AttachmentApi.md#attachmentsiddelete) | **DELETE** /attachments/{id} | Delete attachment
*AttachmentApi* | [**attachmentsIdGet**](docs/Api/AttachmentApi.md#attachmentsidget) | **GET** /attachments/{id} | Fetch attachment
*AttachmentApi* | [**attachmentsIdPut**](docs/Api/AttachmentApi.md#attachmentsidput) | **PUT** /attachments/{id} | Update attachment
*AttachmentApi* | [**attachmentsPost**](docs/Api/AttachmentApi.md#attachmentspost) | **POST** /attachments | Create attachment
*ContactApi* | [**customersCustomerIdContactsGet**](docs/Api/ContactApi.md#customerscustomeridcontactsget) | **GET** /customers/{customerId}/contacts | Fetch customer contact list
*ContactApi* | [**customersCustomerIdContactsIdDelete**](docs/Api/ContactApi.md#customerscustomeridcontactsiddelete) | **DELETE** /customers/{customerId}/contacts/{id} | Delete contact
*ContactApi* | [**customersCustomerIdContactsIdGet**](docs/Api/ContactApi.md#customerscustomeridcontactsidget) | **GET** /customers/{customerId}/contacts/{id} | Fetch contact
*ContactApi* | [**customersCustomerIdContactsIdPut**](docs/Api/ContactApi.md#customerscustomeridcontactsidput) | **PUT** /customers/{customerId}/contacts/{id} | Update Contact
*ContactApi* | [**customersCustomerIdContactsPost**](docs/Api/ContactApi.md#customerscustomeridcontactspost) | **POST** /customers/{customerId}/contacts | Create new contact
*CustomerApi* | [**customersGet**](docs/Api/CustomerApi.md#customersget) | **GET** /customers | Fetch customers list
*CustomerApi* | [**customersIdDelete**](docs/Api/CustomerApi.md#customersiddelete) | **DELETE** /customers/{id} | Delete customer
*CustomerApi* | [**customersIdGet**](docs/Api/CustomerApi.md#customersidget) | **GET** /customers/{id} | Fetch customer
*CustomerApi* | [**customersIdPut**](docs/Api/CustomerApi.md#customersidput) | **PUT** /customers/{id} | Update Customer
*CustomerApi* | [**customersPost**](docs/Api/CustomerApi.md#customerspost) | **POST** /customers | Create customer
*CustomerGroupApi* | [**customerGroupsGet**](docs/Api/CustomerGroupApi.md#customergroupsget) | **GET** /customer-groups | Fetch customer group list
*CustomerGroupApi* | [**customerGroupsIdDelete**](docs/Api/CustomerGroupApi.md#customergroupsiddelete) | **DELETE** /customer-groups/{id} | Delete customer group
*CustomerGroupApi* | [**customerGroupsIdGet**](docs/Api/CustomerGroupApi.md#customergroupsidget) | **GET** /customer-groups/{id} | Fetch customer group
*CustomerGroupApi* | [**customerGroupsIdPut**](docs/Api/CustomerGroupApi.md#customergroupsidput) | **PUT** /customer-groups/{id} | Update customer group
*CustomerGroupApi* | [**customerGroupsPost**](docs/Api/CustomerGroupApi.md#customergroupspost) | **POST** /customer-groups | Create customer group
*DiscountApi* | [**discountsPositionGet**](docs/Api/DiscountApi.md#discountspositionget) | **GET** /discounts/position | Fetch list of position discounts
*DiscountApi* | [**discountsPositionGroupGet**](docs/Api/DiscountApi.md#discountspositiongroupget) | **GET** /discounts/position-group | Fetch list of position-group discounts
*DiscountApi* | [**discountsPositionGroupIdDelete**](docs/Api/DiscountApi.md#discountspositiongroupiddelete) | **DELETE** /discounts/position-group/{id} | Delete the specified position-group discount
*DiscountApi* | [**discountsPositionGroupIdGet**](docs/Api/DiscountApi.md#discountspositiongroupidget) | **GET** /discounts/position-group/{id} | Fetch specified position-group discount by id
*DiscountApi* | [**discountsPositionGroupIdPut**](docs/Api/DiscountApi.md#discountspositiongroupidput) | **PUT** /discounts/position-group/{id} | Update a position-group discount
*DiscountApi* | [**discountsPositionGroupPost**](docs/Api/DiscountApi.md#discountspositiongrouppost) | **POST** /discounts/position-group | Create a new position-group discount
*DiscountApi* | [**discountsPositionIdDelete**](docs/Api/DiscountApi.md#discountspositioniddelete) | **DELETE** /discounts/position/{id} | Delete the specified position discount
*DiscountApi* | [**discountsPositionIdGet**](docs/Api/DiscountApi.md#discountspositionidget) | **GET** /discounts/position/{id} | Fetch specified position discount by id
*DiscountApi* | [**discountsPositionIdPut**](docs/Api/DiscountApi.md#discountspositionidput) | **PUT** /discounts/position/{id} | Update a position discount
*DiscountApi* | [**discountsPositionPost**](docs/Api/DiscountApi.md#discountspositionpost) | **POST** /discounts/position | Create a new position discount
*DocumentApi* | [**documentsGet**](docs/Api/DocumentApi.md#documentsget) | **GET** /documents | Fetch documents list
*DocumentApi* | [**documentsIdCancelPost**](docs/Api/DocumentApi.md#documentsidcancelpost) | **POST** /documents/{id}/cancel | Cancel document
*DocumentApi* | [**documentsIdDelete**](docs/Api/DocumentApi.md#documentsiddelete) | **DELETE** /documents/{id} | Delete document
*DocumentApi* | [**documentsIdDonePut**](docs/Api/DocumentApi.md#documentsiddoneput) | **PUT** /documents/{id}/done | To complete a document.
*DocumentApi* | [**documentsIdGet**](docs/Api/DocumentApi.md#documentsidget) | **GET** /documents/{id} | Fetch document
*DocumentApi* | [**documentsIdJpgGet**](docs/Api/DocumentApi.md#documentsidjpgget) | **GET** /documents/{id}/jpg | Download a document as an jpeg-image
*DocumentApi* | [**documentsIdPdfGet**](docs/Api/DocumentApi.md#documentsidpdfget) | **GET** /documents/{id}/pdf | Fetch pdf document
*DocumentApi* | [**documentsIdPut**](docs/Api/DocumentApi.md#documentsidput) | **PUT** /documents/{id} | Update document
*DocumentApi* | [**documentsIdSendTypePost**](docs/Api/DocumentApi.md#documentsidsendtypepost) | **POST** /documents/{id}/send/{type} | Send document
*DocumentApi* | [**documentsIdTypePost**](docs/Api/DocumentApi.md#documentsidtypepost) | **POST** /documents/{id}/{type} | Convert an existing document to one of a different type
*DocumentApi* | [**documentsPost**](docs/Api/DocumentApi.md#documentspost) | **POST** /documents | Create document
*DocumentPaymentApi* | [**documentPaymentsGet**](docs/Api/DocumentPaymentApi.md#documentpaymentsget) | **GET** /document-payments | Fetch document payments list
*DocumentPaymentApi* | [**documentPaymentsIdDelete**](docs/Api/DocumentPaymentApi.md#documentpaymentsiddelete) | **DELETE** /document-payments/{id} | Delete document payment
*DocumentPaymentApi* | [**documentPaymentsIdGet**](docs/Api/DocumentPaymentApi.md#documentpaymentsidget) | **GET** /document-payments/{id} | Fetch document payment
*DocumentPaymentApi* | [**documentPaymentsPost**](docs/Api/DocumentPaymentApi.md#documentpaymentspost) | **POST** /document-payments | Create document payment
*DocumentVersionApi* | [**documentsIdVersionsGet**](docs/Api/DocumentVersionApi.md#documentsidversionsget) | **GET** /documents/{id}/versions | List all versions of a given document
*DocumentVersionApi* | [**documentsIdVersionsVersionIdGet**](docs/Api/DocumentVersionApi.md#documentsidversionsversionidget) | **GET** /documents/{id}/versions/{versionId} | Show a single version of a given document
*DocumentVersionApi* | [**documentsIdVersionsVersionIdItemsVersionItemIdDownloadGet**](docs/Api/DocumentVersionApi.md#documentsidversionsversioniditemsversionitemiddownloadget) | **GET** /documents/{id}/versions/{versionId}/items/{versionItemId}/download | Download a specific file for a single version of a given document
*LoginsApi* | [**loginsGet**](docs/Api/LoginsApi.md#loginsget) | **GET** /logins | 
*LoginsApi* | [**loginsIdGet**](docs/Api/LoginsApi.md#loginsidget) | **GET** /logins/{id} | 
*PdfTemplatesApi* | [**pdfTemplatesGet**](docs/Api/PdfTemplatesApi.md#pdftemplatesget) | **GET** /pdf-templates | Fetch PDF Templates list
*PositionApi* | [**positionsGet**](docs/Api/PositionApi.md#positionsget) | **GET** /positions | Fetch positions list
*PositionApi* | [**positionsIdDelete**](docs/Api/PositionApi.md#positionsiddelete) | **DELETE** /positions/{id} | Delete position
*PositionApi* | [**positionsIdGet**](docs/Api/PositionApi.md#positionsidget) | **GET** /positions/{id} | Fetch position
*PositionApi* | [**positionsIdPut**](docs/Api/PositionApi.md#positionsidput) | **PUT** /positions/{id} | Update position
*PositionApi* | [**positionsPost**](docs/Api/PositionApi.md#positionspost) | **POST** /positions | Create position
*PositionGroupApi* | [**positionGroupsGet**](docs/Api/PositionGroupApi.md#positiongroupsget) | **GET** /position-groups | Fetch position group list
*PositionGroupApi* | [**positionGroupsIdDelete**](docs/Api/PositionGroupApi.md#positiongroupsiddelete) | **DELETE** /position-groups/{id} | Delete position group
*PositionGroupApi* | [**positionGroupsIdGet**](docs/Api/PositionGroupApi.md#positiongroupsidget) | **GET** /position-groups/{id} | Fetch position group
*PositionGroupApi* | [**positionGroupsIdPut**](docs/Api/PositionGroupApi.md#positiongroupsidput) | **PUT** /position-groups/{id} | Update position group
*PositionGroupApi* | [**positionGroupsPost**](docs/Api/PositionGroupApi.md#positiongroupspost) | **POST** /position-groups | Create position group
*PostBoxApi* | [**postBoxesGet**](docs/Api/PostBoxApi.md#postboxesget) | **GET** /post-boxes | Fetch post box list
*PostBoxApi* | [**postBoxesIdDelete**](docs/Api/PostBoxApi.md#postboxesiddelete) | **DELETE** /post-boxes/{id} | Delete post box
*PostBoxApi* | [**postBoxesIdGet**](docs/Api/PostBoxApi.md#postboxesidget) | **GET** /post-boxes/{id} | Fetch post box
*ProjectApi* | [**projectsGet**](docs/Api/ProjectApi.md#projectsget) | **GET** /projects | Fetch projects list
*ProjectApi* | [**projectsIdDelete**](docs/Api/ProjectApi.md#projectsiddelete) | **DELETE** /projects/{id} | Delete project
*ProjectApi* | [**projectsIdGet**](docs/Api/ProjectApi.md#projectsidget) | **GET** /projects/{id} | Fetch project
*ProjectApi* | [**projectsIdPut**](docs/Api/ProjectApi.md#projectsidput) | **PUT** /projects/{id} | Update project
*ProjectApi* | [**projectsPost**](docs/Api/ProjectApi.md#projectspost) | **POST** /projects | Create project
*SepaPaymentApi* | [**sepaPaymentsGet**](docs/Api/SepaPaymentApi.md#sepapaymentsget) | **GET** /sepa-payments | Fetch SEPA payments list
*SepaPaymentApi* | [**sepaPaymentsIdDelete**](docs/Api/SepaPaymentApi.md#sepapaymentsiddelete) | **DELETE** /sepa-payments/{id} | Delete SEPA payment
*SepaPaymentApi* | [**sepaPaymentsIdGet**](docs/Api/SepaPaymentApi.md#sepapaymentsidget) | **GET** /sepa-payments/{id} | Fetch SEPA payment
*SepaPaymentApi* | [**sepaPaymentsIdPut**](docs/Api/SepaPaymentApi.md#sepapaymentsidput) | **PUT** /sepa-payments/{id} | Update SEPA payment
*SepaPaymentApi* | [**sepaPaymentsPost**](docs/Api/SepaPaymentApi.md#sepapaymentspost) | **POST** /sepa-payments | Create SEPA payment
*SerialNumberApi* | [**serialNumbersGet**](docs/Api/SerialNumberApi.md#serialnumbersget) | **GET** /serial-numbers | Fetch a list of serial numbers for positions
*SerialNumberApi* | [**serialNumbersIdDelete**](docs/Api/SerialNumberApi.md#serialnumbersiddelete) | **DELETE** /serial-numbers/{id} | Delete a serial number for a position
*SerialNumberApi* | [**serialNumbersIdGet**](docs/Api/SerialNumberApi.md#serialnumbersidget) | **GET** /serial-numbers/{id} | Fetch a serial number for a position
*SerialNumberApi* | [**serialNumbersPost**](docs/Api/SerialNumberApi.md#serialnumberspost) | **POST** /serial-numbers | Create s serial number for a position
*StockApi* | [**stocksGet**](docs/Api/StockApi.md#stocksget) | **GET** /stocks | Fetch a list of stock entries for positions
*StockApi* | [**stocksIdGet**](docs/Api/StockApi.md#stocksidget) | **GET** /stocks/{id} | Fetch an stock entry for a position
*StockApi* | [**stocksPost**](docs/Api/StockApi.md#stockspost) | **POST** /stocks | Create a stock entry for a position
*TaskApi* | [**tasksGet**](docs/Api/TaskApi.md#tasksget) | **GET** /tasks | Fetch tasks list
*TaskApi* | [**tasksIdDelete**](docs/Api/TaskApi.md#tasksiddelete) | **DELETE** /tasks/{id} | Delete task
*TaskApi* | [**tasksIdGet**](docs/Api/TaskApi.md#tasksidget) | **GET** /tasks/{id} | Fetch task
*TaskApi* | [**tasksIdPut**](docs/Api/TaskApi.md#tasksidput) | **PUT** /tasks/{id} | Update task
*TaskApi* | [**tasksPost**](docs/Api/TaskApi.md#taskspost) | **POST** /tasks | Create task
*TextTemplateApi* | [**textTemplatesGet**](docs/Api/TextTemplateApi.md#texttemplatesget) | **GET** /text-templates | Fetch text templates list
*TextTemplateApi* | [**textTemplatesIdDelete**](docs/Api/TextTemplateApi.md#texttemplatesiddelete) | **DELETE** /text-templates/{id} | Delete text template
*TextTemplateApi* | [**textTemplatesIdGet**](docs/Api/TextTemplateApi.md#texttemplatesidget) | **GET** /text-templates/{id} | Fetch text template
*TextTemplateApi* | [**textTemplatesIdPut**](docs/Api/TextTemplateApi.md#texttemplatesidput) | **PUT** /text-templates/{id} | Update text template
*TextTemplateApi* | [**textTemplatesPost**](docs/Api/TextTemplateApi.md#texttemplatespost) | **POST** /text-templates | Create text template
*TimeTrackingApi* | [**timeTrackingsGet**](docs/Api/TimeTrackingApi.md#timetrackingsget) | **GET** /time-trackings | Fetch time trackings list
*TimeTrackingApi* | [**timeTrackingsIdDelete**](docs/Api/TimeTrackingApi.md#timetrackingsiddelete) | **DELETE** /time-trackings/{id} | Delete time tracking
*TimeTrackingApi* | [**timeTrackingsIdGet**](docs/Api/TimeTrackingApi.md#timetrackingsidget) | **GET** /time-trackings/{id} | Fetch time tracking
*TimeTrackingApi* | [**timeTrackingsIdPut**](docs/Api/TimeTrackingApi.md#timetrackingsidput) | **PUT** /time-trackings/{id} | Update time tracking
*TimeTrackingApi* | [**timeTrackingsPost**](docs/Api/TimeTrackingApi.md#timetrackingspost) | **POST** /time-trackings | Create time tracking
*WebhookApi* | [**webhooksGet**](docs/Api/WebhookApi.md#webhooksget) | **GET** /webhooks | Fetch WebHooks list
*WebhookApi* | [**webhooksIdDelete**](docs/Api/WebhookApi.md#webhooksiddelete) | **DELETE** /webhooks/{id} | Delete WebHook
*WebhookApi* | [**webhooksIdGet**](docs/Api/WebhookApi.md#webhooksidget) | **GET** /webhooks/{id} | Fetch WebHook
*WebhookApi* | [**webhooksIdPut**](docs/Api/WebhookApi.md#webhooksidput) | **PUT** /webhooks/{id} | Update WebHook
*WebhookApi* | [**webhooksPost**](docs/Api/WebhookApi.md#webhookspost) | **POST** /webhooks | Create WebHook

## Models

- [Attachment](docs/Model/Attachment.md)
- [Attachments](docs/Model/Attachments.md)
- [Contact](docs/Model/Contact.md)
- [Contacts](docs/Model/Contacts.md)
- [Customer](docs/Model/Customer.md)
- [CustomerGroup](docs/Model/CustomerGroup.md)
- [CustomerGroups](docs/Model/CustomerGroups.md)
- [CustomerSnapshot](docs/Model/CustomerSnapshot.md)
- [Customers](docs/Model/Customers.md)
- [Discount](docs/Model/Discount.md)
- [DiscountPosition](docs/Model/DiscountPosition.md)
- [DiscountPositionGroup](docs/Model/DiscountPositionGroup.md)
- [DiscountPositionGroups](docs/Model/DiscountPositionGroups.md)
- [DiscountPositions](docs/Model/DiscountPositions.md)
- [Document](docs/Model/Document.md)
- [DocumentAddress](docs/Model/DocumentAddress.md)
- [DocumentPayment](docs/Model/DocumentPayment.md)
- [DocumentPayments](docs/Model/DocumentPayments.md)
- [DocumentPosition](docs/Model/DocumentPosition.md)
- [DocumentRecurring](docs/Model/DocumentRecurring.md)
- [DocumentVersion](docs/Model/DocumentVersion.md)
- [DocumentVersionItem](docs/Model/DocumentVersionItem.md)
- [DocumentVersions](docs/Model/DocumentVersions.md)
- [Documents](docs/Model/Documents.md)
- [FileFormatConfig](docs/Model/FileFormatConfig.md)
- [Login](docs/Model/Login.md)
- [LoginSecurity](docs/Model/LoginSecurity.md)
- [Logins](docs/Model/Logins.md)
- [ModelList](docs/Model/ModelList.md)
- [PDFTemplate](docs/Model/PDFTemplate.md)
- [PDFTemplateSettings](docs/Model/PDFTemplateSettings.md)
- [PDFTemplateSettingsEmail](docs/Model/PDFTemplateSettingsEmail.md)
- [PDFTemplates](docs/Model/PDFTemplates.md)
- [Position](docs/Model/Position.md)
- [PositionExportIdentifierExtended](docs/Model/PositionExportIdentifierExtended.md)
- [PositionGroup](docs/Model/PositionGroup.md)
- [PositionGroups](docs/Model/PositionGroups.md)
- [Positions](docs/Model/Positions.md)
- [PostBox](docs/Model/PostBox.md)
- [PostBoxRequest](docs/Model/PostBoxRequest.md)
- [PostBoxes](docs/Model/PostBoxes.md)
- [Project](docs/Model/Project.md)
- [Projects](docs/Model/Projects.md)
- [SEPAPayment](docs/Model/SEPAPayment.md)
- [SEPAPayments](docs/Model/SEPAPayments.md)
- [SerialNumber](docs/Model/SerialNumber.md)
- [SerialNumbers](docs/Model/SerialNumbers.md)
- [ServiceDate](docs/Model/ServiceDate.md)
- [Stock](docs/Model/Stock.md)
- [Stocks](docs/Model/Stocks.md)
- [Task](docs/Model/Task.md)
- [Tasks](docs/Model/Tasks.md)
- [TextTemplate](docs/Model/TextTemplate.md)
- [TextTemplates](docs/Model/TextTemplates.md)
- [TimeTracking](docs/Model/TimeTracking.md)
- [TimeTrackings](docs/Model/TimeTrackings.md)
- [WebHook](docs/Model/WebHook.md)
- [WebHookLastResponse](docs/Model/WebHookLastResponse.md)
- [WebHooks](docs/Model/WebHooks.md)

## Authorization

Authentication schemes defined for the API:
### Bearer

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header


### basicAuth

- **Type**: HTTP basic authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.84.0`
    - Generator version: `7.5.0-SNAPSHOT`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
