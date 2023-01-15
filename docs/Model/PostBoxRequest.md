# # PostBoxRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**to** | **string** |  | [optional]
**cc** | **string** |  | [optional]
**from** | **string** |  | [optional]
**subject** | **string** |  | [optional]
**message** | **string** |  | [optional]
**date** | **\DateTime** |  | [optional]
**send_by_self** | **bool** |  | [optional]
**send_with_attachment** | **bool** |  | [optional] [default to true]
**document_file_type** | **string** | When set to null, the setting on the customer is used | [optional]
**post_send_type** | **string** | This value indicates what method is used when the document is send via mail. The different types are offered by the german post as additional services. The registered mail options will include a tracking number which will be  added to the postbox when known.  If the value is omitted or empty when a postbox is created with the type \&quot;POST\&quot; post_send_type_standard will be used.  For postbox with a different type than \&quot;POST\&quot; this field will hold a empty string. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
