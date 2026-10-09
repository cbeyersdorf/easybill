# IncomingDocument

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accounting_positions** | [**\cbeyersdorf\easybill\Model\IncomingDocumentAccountingPosition[]**](IncomingDocumentAccountingPosition.md) | Tax split lines associated with the document. | [optional] [readonly]
**created_at** | **\DateTime** |  | [optional] [readonly]
**currency_code** | **string** |  | [optional] [readonly]
**supplier_id** | **int** |  | [optional] [readonly]
**delivery_date** | **\DateTime** |  | [optional] [readonly]
**document_number** | **string** | Internal sequential document number assigned by easybill. | [optional] [readonly]
**document_type** | **string** |  | [optional] [readonly]
**due_date** | **\DateTime** |  | [optional] [readonly]
**external_number** | **string** | The supplier&#39;s own document number as extracted from the document. | [optional] [readonly]
**id** | **string** |  | [optional] [readonly]
**is_paid** | **bool** |  | [optional] [readonly]
**issue_date** | **\DateTime** |  | [optional] [readonly]
**login_id** | **int** |  | [optional] [readonly]
**payments** | [**\cbeyersdorf\easybill\Model\IncomingDocumentPayment[]**](IncomingDocumentPayment.md) | Payments recorded against the document. | [optional] [readonly]
**status** | **string** |  | [optional] [readonly]
**supplier** | [**\cbeyersdorf\easybill\Model\IncomingDocumentSupplier**](IncomingDocumentSupplier.md) |  | [optional]
**total_gross_amount** | **int** | Total gross amount in cents (e.g. 11900 &#x3D; 119.00€). | [optional] [readonly]
**total_net_amount** | **int** | Total net amount in cents (e.g. 10000 &#x3D; 100.00€). | [optional] [readonly]
**interface** | **string** | How the document was received. | [optional] [readonly]
**updated_at** | **\DateTime** |  | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
