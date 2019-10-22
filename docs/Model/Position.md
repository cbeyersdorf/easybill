# Position

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional] 
**type** | **string** |  | [optional] [default to 'PRODUCT']
**number** | **string** |  | 
**description** | **string** | The positions name or description | 
**note** | **string** | Note for internal use | [optional] [default to 'null']
**unit** | **string** |  | [optional] [default to 'null']
**export_identifier** | **string** | The FAS-Account is the four-digit revenue account, in which the revenue will be entered when doing the export to your tax consultant. In case you want to split your revenue to several revenue accounts, please talk to your tax consultant before, to guarantee an unobstructed use of the interface. For every revenue element, there are number ranges, which can be used. Please avoid using combinations of numbers, which can not be used by your tax consultant. | [optional] [default to 'null']
**export_identifier_extended** | [**\cbeyersdorf\easybill\Model\PositionExportIdentifierExtended**](PositionExportIdentifierExtended.md) |  | [optional] 
**login_id** | **int** |  | [optional] 
**price_type** | **string** |  | [optional] [default to 'NETTO']
**vat_percent** | **float** |  | [optional] [default to 19.0]
**sale_price** | **float** | Price in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) | 
**sale_price2** | **float** | Price for customers of group 2 in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) | [optional] 
**sale_price3** | **float** | Price for customers of group 3 in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) | [optional] 
**sale_price4** | **float** | Price for customers of group 4 in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) | [optional] 
**sale_price5** | **float** | Price for customers of group 5 in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) | [optional] 
**sale_price6** | **float** | Price for customers of group 6 in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) | [optional] 
**sale_price7** | **float** | Price for customers of group 7 in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) | [optional] 
**sale_price8** | **float** | Price for customers of group 8 in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) | [optional] 
**sale_price9** | **float** | Price for customers of group 9 in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) | [optional] 
**sale_price10** | **float** | Price for customers of group 10 in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) | [optional] 
**cost_price** | **float** | Price in cents (e.g. \&quot;150\&quot; &#x3D; 1.50€) | [optional] 
**export_cost1** | **string** |  | [optional] [default to 'null']
**export_cost2** | **string** |  | [optional] [default to 'null']
**group_id** | **int** |  | [optional] 
**stock** | **string** | Activates stock management for this position | [optional] [default to 'NO']
**stock_count** | **int** | Current stock count | [optional] 
**stock_limit_notify** | **bool** | Notify when stock_count is lower than stock_limit | [optional] [default to false]
**stock_limit** | **int** |  | [optional] 
**quantity** | **float** | Used as the default quantity when adding this position to a document | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


