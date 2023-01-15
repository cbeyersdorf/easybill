# # SEPAPayment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount** | **int** | Amount in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) |
**created_at** | **\DateTime** |  | [optional] [readonly]
**creditor_bic** | **string** | If type is DEBIT, this field is overwritten with the selected bank account data on export. | [optional] [default to 'null']
**creditor_iban** | **string** | Mandatory if type is CREDIT. If type is DEBIT, this field is overwritten with the selected bank account data on export. | [optional]
**creditor_name** | **string** | Mandatory if type is CREDIT. If type is DEBIT, this field is overwritten with the selected bank account data on export. | [optional]
**debitor_bic** | **string** | If type is CREDIT, this field is overwritten with the selected bank account data on export. | [optional] [default to 'null']
**debitor_iban** | **string** | Mandatory if type is DEBIT. If type is CREDIT, this field is overwritten with the selected bank account data on export. |
**debitor_name** | **string** | Mandatory if type is DEBIT. If type is CREDIT, this field is overwritten with the selected bank account data on export. |
**debitor_address_line_1** | **string** | Mandatory if type is DEBIT and the debitor&#39;s IBAN belongs to a country outside the EEA | [optional]
**debitor_address_line2** | **string** | string | [optional]
**debitor_country** | **string** | Mandatory if type is DEBIT and the debitor&#39;s IBAN belongs to a country outside the EEA | [optional]
**document_id** | **int** |  |
**export_at** | **\DateTime** | If a date is set, this record is marked as exported | [optional]
**export_error** | **string** |  | [optional] [readonly]
**id** | **int** |  | [optional] [readonly]
**local_instrument** | **string** | CORE: SEPA Core Direct Debit&lt;br/&gt; COR1: SEPA-Basislastschrift COR1&lt;br/&gt; B2B: SEPA Business to Business Direct Debit |
**mandate_date_of_signature** | **\DateTime** |  |
**mandate_id** | **string** |  |
**reference** | **string** |  |
**remittance_information** | **string** |  | [optional] [default to 'null']
**requested_at** | **\DateTime** | Booking date | [optional]
**sequence_type** | **string** | FRST: Erstlastschrift&lt;br/&gt; RCUR: Folgelastschrift&lt;br/&gt; OOFF: Einmallastschrift&lt;br/&gt; FNAL: Letztmalige Lastschrift |
**updated_at** | **string** |  | [optional] [readonly]
**type** | **string** |  | [optional] [default to 'DEBIT']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
