# # TimeTracking

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cleared_at** | **\DateTime** |  | [optional]
**created_at** | **\DateTime** |  | [optional] [readonly]
**date_from_at** | **\DateTime** |  | [optional]
**date_thru_at** | **\DateTime** |  | [optional]
**description** | **string** |  |
**hourly_rate** | **float** | Hourly rate in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) | [optional] [default to 0.0]
**id** | **int** |  | [optional] [readonly]
**note** | **string** |  | [optional] [default to 'null']
**number** | **string** | Can be chosen freely | [optional]
**position_id** | **int** |  | [optional]
**project_id** | **int** |  | [optional]
**login_id** | **int** | If omitted or null, the currently active login is used. | [optional]
**timer_value** | **int** | Tracked time in minutes | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
