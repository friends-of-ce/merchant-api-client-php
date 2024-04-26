# # IPurchaseOrderByFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** |  | [optional]
**channelId** | **int** |  | [optional]
**channelName** | **string** |  | [optional]
**globalChannelName** | **string** |  | [optional]
**globalChannelId** | **int** |  | [optional]
**channelPurchaseOrderNo** | **string** |  | [optional]
**merchantPurchaseOrderNo** | **string** |  | [optional]
**status** | [**\FriendsOfCE\Merchant\ApiClient\Model\ModulesPurchaseOrderStatus**](ModulesPurchaseOrderStatus.md) |  | [optional]
**createdAt** | **\DateTime** |  | [optional]
**updatedAt** | **\DateTime** |  | [optional]
**type** | [**\FriendsOfCE\Merchant\ApiClient\Model\ModulesPurchaseOrderType**](ModulesPurchaseOrderType.md) |  | [optional]
**fromShipDate** | **\DateTime** |  | [optional]
**toShipDate** | **\DateTime** |  | [optional]
**fromDeliveryDate** | **\DateTime** |  | [optional]
**toDeliveryDate** | **\DateTime** |  | [optional]
**importInformation** | [**\FriendsOfCE\Merchant\ApiClient\Model\IImportInformation**](IImportInformation.md) |  | [optional]
**sellingParty** | [**\FriendsOfCE\Merchant\ApiClient\Model\IVendorParty**](IVendorParty.md) |  | [optional]
**shipToParty** | [**\FriendsOfCE\Merchant\ApiClient\Model\IVendorParty**](IVendorParty.md) |  | [optional]
**buyingParty** | [**\FriendsOfCE\Merchant\ApiClient\Model\IVendorParty**](IVendorParty.md) |  | [optional]
**billingParty** | [**\FriendsOfCE\Merchant\ApiClient\Model\IVendorParty**](IVendorParty.md) |  | [optional]
**lines** | [**\FriendsOfCE\Merchant\ApiClient\Model\IPurchaseOrderLineByFilter[]**](IPurchaseOrderLineByFilter.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
