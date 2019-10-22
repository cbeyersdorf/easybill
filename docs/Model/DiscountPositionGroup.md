# DiscountPositionGroup

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**customer_id** | **int** |  | 
**discount** | **int** | The discount value depending on \&quot;discount_type\&quot; | [optional] 
**discount_type** | **string** | AMOUNT subtracts the value in \&quot;discount\&quot; from the total&lt;br/&gt; QUANTITY subtracts the value in \&quot;discount\&quot; multiplied by quantity&lt;br/&gt; PERCENT uses the value in \&quot;discount\&quot; as a percentage&lt;br/&gt; FIX sets the value in \&quot;discount\&quot; as the new price | [optional] [default to 'PERCENT']

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


