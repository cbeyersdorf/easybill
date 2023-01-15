# # PostBox

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] [readonly]
**document_id** | **int** |  | [optional]
**to** | **string** |  | [optional]
**cc** | **string** |  | [optional]
**from** | **string** |  | [optional]
**subject** | **string** |  | [optional]
**message** | **string** |  | [optional]
**date** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  | [optional]
**processed_at** | **\DateTime** |  | [optional]
**send_by_self** | **bool** |  | [optional]
**send_with_attachment** | **bool** |  | [optional]
**type** | **string** |  | [optional]
**status** | **string** |  | [optional]
**status_msg** | **string** |  | [optional]
**login_id** | **int** |  | [optional] [readonly]
**document_file_type** | **string** |  | [optional]
**post_send_type** | **string** | This value indicates what method is used when the document is send via mail. The different types are offered by the german post as additional services. The registered mail options will include a tracking number which will be  added to the postbox when known.  If the value is omitted or empty when a postbox is created with the type \&quot;POST\&quot; post_send_type_standard will be used.  For postbox with a different type than \&quot;POST\&quot; this field will hold a empty string. | [optional]
**tracking_identifier** | **string** | If the document is send with one of the registered send types stated for post_send_type, a tracking identifier will be added to the postbox at a later point when the tracking identifier is provided by our service partner. | [optional] [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
