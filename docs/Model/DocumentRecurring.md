# # DocumentRecurring

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**next_date** | **\DateTime** | Must be in the future |
**frequency** | **string** |  | [optional] [default to 'MONTHLY']
**frequency_special** | **string** |  | [optional] [default to 'null']
**interval** | **int** |  | [optional]
**end_date_or_count** | **string** | Date of last exectution day or number of times to exectute | [optional] [default to 'null']
**status** | **string** |  | [optional] [default to 'WAITING']
**as_draft** | **bool** |  | [optional] [default to false]
**is_notify** | **bool** |  | [optional] [default to false]
**send_as** | **string** |  | [optional] [default to 'null']
**is_sign** | **bool** |  | [optional] [default to false]
**is_paid** | **bool** |  | [optional] [default to false]
**paid_date_option** | **string** | Option is used to determine what date is used for the payment if is_paid is true. \&quot;next_valid_date\&quot; selects the next workday in regards to the created date of the document if the date falls on a saturday or sunday. | [optional] [default to 'created_date']
**is_sepa** | **bool** |  | [optional] [default to false]
**sepa_local_instrument** | **string** |  | [optional] [default to 'null']
**sepa_sequence_type** | **string** |  | [optional] [default to 'null']
**sepa_reference** | **string** |  | [optional] [default to 'null']
**sepa_remittance_information** | **string** |  | [optional] [default to 'null']
**target_type** | **string** | The document type that will be generated. Can not be changed on existing documents. | [optional] [default to 'INVOICE']

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
