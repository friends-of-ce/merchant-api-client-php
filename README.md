# OpenAPIClient-php

ChannelEngine API for merchants


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
      "url": "https://github.com/friends-of-ce/merchant-api-client-php.git"
    }
  ],
  "require": {
    "friends-of-ce/merchant-api-client-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\CancellationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantCancellationRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantCancellationRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantCancellationRequest

try {
    $result = $apiInstance->cancellationCreate($merchantCancellationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancellationApi->cancellationCreate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://demo.channelengine.net/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CancellationApi* | [**cancellationCreate**](docs/Api/CancellationApi.md#cancellationcreate) | **POST** /v2/cancellations | Creates a cancelation
*CancellationApi* | [**cancellationGetForMerchant**](docs/Api/CancellationApi.md#cancellationgetformerchant) | **GET** /v2/cancellations/merchant | Gets cancelations
*ChannelsApi* | [**channelPluginsGet**](docs/Api/ChannelsApi.md#channelpluginsget) | **GET** /v2/channels | Gets channels
*CompetitionPriceApi* | [**competitionPricesGetBuyBoxPrices**](docs/Api/CompetitionPriceApi.md#competitionpricesgetbuyboxprices) | **GET** /v2/competitionprices/buyboxprices | Gets the price from the buy box winner
*FulfillmentStockApi* | [**fulfillmentStockGetFulfillementStockWithStockLocations**](docs/Api/FulfillmentStockApi.md#fulfillmentstockgetfulfillementstockwithstocklocations) | **GET** /v2/fulfillmentstock | Gets product stock across all warehouses with stock locations
*ListedProductsApi* | [**listedProductGetByFilter**](docs/Api/ListedProductsApi.md#listedproductgetbyfilter) | **GET** /v2/channels/{channelId}/products | Gets products listed by channel
*NotificationApi* | [**notificationIndex**](docs/Api/NotificationApi.md#notificationindex) | **GET** /v2/notifications | Gets notifications
*OfferApi* | [**offerGetStock**](docs/Api/OfferApi.md#offergetstock) | **GET** /v2/offer/stock | Gets product stock across all warehouses
*OfferApi* | [**offerStockPriceUpdate**](docs/Api/OfferApi.md#offerstockpriceupdate) | **PUT** /v2/offer | Updates stock and price
*OfferApi* | [**offerStockUpdate**](docs/Api/OfferApi.md#offerstockupdate) | **PUT** /v2/offer/stock | Updates stock
*OrderApi* | [**orderAcknowledge**](docs/Api/OrderApi.md#orderacknowledge) | **POST** /v2/orders/acknowledge | Acknowledges orders
*OrderApi* | [**orderGetByFilter**](docs/Api/OrderApi.md#ordergetbyfilter) | **GET** /v2/orders | Gets orders by filter
*OrderApi* | [**orderGetNew**](docs/Api/OrderApi.md#ordergetnew) | **GET** /v2/orders/new | Gets new orders
*OrderApi* | [**orderInvoice**](docs/Api/OrderApi.md#orderinvoice) | **GET** /v2/orders/{merchantOrderNo}/invoice | Generates an order invoice
*OrderApi* | [**orderPackingSlip**](docs/Api/OrderApi.md#orderpackingslip) | **GET** /v2/orders/{merchantOrderNo}/packingslip | Generates a packing slip
*OrderApi* | [**orderUpdate**](docs/Api/OrderApi.md#orderupdate) | **PUT** /v2/orders/comment | Updates an order comment
*OrderApi* | [**orderUploadInvoice**](docs/Api/OrderApi.md#orderuploadinvoice) | **POST** /v2/orders/{merchantOrderNo}/invoice | Uploads an order invoice
*OrderApi* | [**orderUploadInvoiceAsString**](docs/Api/OrderApi.md#orderuploadinvoiceasstring) | **POST** /v2/orders/{merchantOrderNo}/invoice-base64 | Uploads an order invoice PDF from Base64 string.
*ProductApi* | [**productBulkDelete**](docs/Api/ProductApi.md#productbulkdelete) | **POST** /v2/products/bulkdelete | Deletes products
*ProductApi* | [**productBulkPatch**](docs/Api/ProductApi.md#productbulkpatch) | **PATCH** /v2/products | Updates products attributes
*ProductApi* | [**productBulkPatchExtraDataItems**](docs/Api/ProductApi.md#productbulkpatchextradataitems) | **PATCH** /v2/products/extra-data/bulk | Adds, updates, or deletes custom attributes
*ProductApi* | [**productCreate**](docs/Api/ProductApi.md#productcreate) | **POST** /v2/products | Updates or creates products
*ProductApi* | [**productDelete**](docs/Api/ProductApi.md#productdelete) | **DELETE** /v2/products/{merchantProductNo} | Deletes a product
*ProductApi* | [**productFreeze**](docs/Api/ProductApi.md#productfreeze) | **POST** /v2/products/freeze | Updates selected products and sets them either to frozen or not-frozen status.
*ProductApi* | [**productGetByFilter**](docs/Api/ProductApi.md#productgetbyfilter) | **GET** /v2/products | Gets products
*ProductApi* | [**productGetByMerchantProductNo**](docs/Api/ProductApi.md#productgetbymerchantproductno) | **GET** /v2/products/{merchantProductNo} | Gets a product
*ProductApi* | [**productPatch**](docs/Api/ProductApi.md#productpatch) | **PATCH** /v2/products/{merchantProductNo} | Updates product attributes
*ProductApi* | [**productPatchExtraDataItems**](docs/Api/ProductApi.md#productpatchextradataitems) | **PATCH** /v2/products/extra-data | Adds, updates, or deletes a custom attribute
*ProductAttributeGroupApi* | [**productAttributeGroupAddProductExtraData**](docs/Api/ProductAttributeGroupApi.md#productattributegroupaddproductextradata) | **PUT** /v2/product-attribute-group/{groupName}/add | Adds custom attributes to a group
*ProductAttributeGroupApi* | [**productAttributeGroupCreate**](docs/Api/ProductAttributeGroupApi.md#productattributegroupcreate) | **POST** /v2/product-attribute-group | Creates a custom attribute group
*ProductAttributeGroupApi* | [**productAttributeGroupDelete**](docs/Api/ProductAttributeGroupApi.md#productattributegroupdelete) | **DELETE** /v2/product-attribute-group/{groupName} | Deletes a custom attribute group
*ProductAttributeGroupApi* | [**productAttributeGroupGetByFilter**](docs/Api/ProductAttributeGroupApi.md#productattributegroupgetbyfilter) | **GET** /v2/product-attribute-group | Gets custom attribute groups
*ProductAttributeGroupApi* | [**productAttributeGroupGetWithChannelsByFilter**](docs/Api/ProductAttributeGroupApi.md#productattributegroupgetwithchannelsbyfilter) | **GET** /v2/product-attribute-group/linked-channels | Gets custom attribute groups and linked marketplaces
*ProductAttributeGroupApi* | [**productAttributeGroupRemoveProductExtraData**](docs/Api/ProductAttributeGroupApi.md#productattributegroupremoveproductextradata) | **PUT** /v2/product-attribute-group/{groupName}/remove | Deletes custom attributes from a group
*ProductAttributeGroupApi* | [**productAttributeGroupRenameProductAttributeGroup**](docs/Api/ProductAttributeGroupApi.md#productattributegrouprenameproductattributegroup) | **POST** /v2/product-attribute-group/rename | Renames custom attribute groups
*ProductBundleApi* | [**productBundleGetByFilter**](docs/Api/ProductBundleApi.md#productbundlegetbyfilter) | **GET** /v2/productbundles | Gets product bundles
*PurchaseOrdersManagementApi* | [**purchaseOrdersManagementAcknowledge**](docs/Api/PurchaseOrdersManagementApi.md#purchaseordersmanagementacknowledge) | **POST** /v2/purchase-orders/lines/acknowledge | Acknowledges lines of a purchase order
*PurchaseOrdersManagementApi* | [**purchaseOrdersManagementCreateInvoice**](docs/Api/PurchaseOrdersManagementApi.md#purchaseordersmanagementcreateinvoice) | **POST** /v2/purchase-orders/invoice | Creates a purchase order invoice
*PurchaseOrdersManagementApi* | [**purchaseOrdersManagementCreateInvoices**](docs/Api/PurchaseOrdersManagementApi.md#purchaseordersmanagementcreateinvoices) | **POST** /v2/purchase-orders/invoice/bulk | Creates a purchase order invoices in a bulk
*PurchaseOrdersManagementApi* | [**purchaseOrdersManagementGetByFilter**](docs/Api/PurchaseOrdersManagementApi.md#purchaseordersmanagementgetbyfilter) | **GET** /v2/purchase-orders | Gets purchase orders by filter
*ReportApi* | [**reportCreateSettlementsReport**](docs/Api/ReportApi.md#reportcreatesettlementsreport) | **POST** /v2/reports/settlements | Creates a settlement report
*ReportApi* | [**reportGetReport**](docs/Api/ReportApi.md#reportgetreport) | **GET** /v2/reports/{reportId} | Gets a settlement report
*ReportApi* | [**reportGetStatus**](docs/Api/ReportApi.md#reportgetstatus) | **GET** /v2/reports/{reportId}/status | Gets the status of a settlement report
*ReturnApi* | [**returnAcknowledge**](docs/Api/ReturnApi.md#returnacknowledge) | **POST** /v2/returns/merchant/acknowledge | Acknowledges a return
*ReturnApi* | [**returnDeclareForMerchant**](docs/Api/ReturnApi.md#returndeclareformerchant) | **POST** /v2/returns/merchant | Creates merchant return
*ReturnApi* | [**returnGetByMerchantOrderNo**](docs/Api/ReturnApi.md#returngetbymerchantorderno) | **GET** /v2/returns/merchant/{merchantOrderNo} | Gets a return
*ReturnApi* | [**returnGetDeclaredByChannel**](docs/Api/ReturnApi.md#returngetdeclaredbychannel) | **GET** /v2/returns/merchant | Gets marketplace returns
*ReturnApi* | [**returnGetReturns**](docs/Api/ReturnApi.md#returngetreturns) | **GET** /v2/returns | Gets returns by filter
*ReturnApi* | [**returnGetUnhandled**](docs/Api/ReturnApi.md#returngetunhandled) | **GET** /v2/returns/merchant/new | Gets unhandled returns
*ReturnApi* | [**returnUpdateForMerchant**](docs/Api/ReturnApi.md#returnupdateformerchant) | **PUT** /v2/returns | Marks returns as received
*SettingsApi* | [**settingsGet**](docs/Api/SettingsApi.md#settingsget) | **GET** /v2/settings | Gets settings
*SettlementApi* | [**settlementGetByFilter**](docs/Api/SettlementApi.md#settlementgetbyfilter) | **GET** /v2/settlements | Gets settlements
*SettlementApi* | [**settlementUploadSettlement**](docs/Api/SettlementApi.md#settlementuploadsettlement) | **POST** /v2/settlements/upload | Imports a settlement file.
*ShipmentApi* | [**shipmentCreate**](docs/Api/ShipmentApi.md#shipmentcreate) | **POST** /v2/shipments | Creates shipments
*ShipmentApi* | [**shipmentCreateForChannelMethod**](docs/Api/ShipmentApi.md#shipmentcreateforchannelmethod) | **POST** /v2/shipments/channelmethod | Creates a shipment and initiates shipping label generation
*ShipmentApi* | [**shipmentGetShipmentLabelCarriers**](docs/Api/ShipmentApi.md#shipmentgetshipmentlabelcarriers) | **POST** /v2/carriers/{merchantOrderNo} | Gets carriers providing shipping labels
*ShipmentApi* | [**shipmentIndex**](docs/Api/ShipmentApi.md#shipmentindex) | **GET** /v2/shipments/merchant | Gets shipments by filter
*ShipmentApi* | [**shipmentShippingLabel**](docs/Api/ShipmentApi.md#shipmentshippinglabel) | **GET** /v2/orders/{merchantShipmentNo}/shippinglabel | Gets a shipping label
*ShipmentApi* | [**shipmentUpdate**](docs/Api/ShipmentApi.md#shipmentupdate) | **PUT** /v2/shipments/{merchantShipmentNo} | Updates a shipment
*StockLocationApi* | [**stockLocationCreate**](docs/Api/StockLocationApi.md#stocklocationcreate) | **POST** /v2/stocklocations | Creates a stock location
*StockLocationApi* | [**stockLocationIndex**](docs/Api/StockLocationApi.md#stocklocationindex) | **GET** /v2/stocklocations | Gets stock locations
*WebhookApi* | [**webhooksCreate**](docs/Api/WebhookApi.md#webhookscreate) | **POST** /v2/webhooks | Creates a webhook
*WebhookApi* | [**webhooksDelete**](docs/Api/WebhookApi.md#webhooksdelete) | **DELETE** /v2/webhooks/{webhookName} | Deletes a webhook
*WebhookApi* | [**webhooksGetAll**](docs/Api/WebhookApi.md#webhooksgetall) | **GET** /v2/webhooks | Gets webhooks
*WebhookApi* | [**webhooksUpdate**](docs/Api/WebhookApi.md#webhooksupdate) | **PUT** /v2/webhooks | Updates a webhook

## Models

- [AddProductExtraDataRequests](docs/Model/AddProductExtraDataRequests.md)
- [AdvanceSettingsResponse](docs/Model/AdvanceSettingsResponse.md)
- [ApiResponse](docs/Model/ApiResponse.md)
- [BulkMerchantCreatePurchaseOrderInvoicesRequest](docs/Model/BulkMerchantCreatePurchaseOrderInvoicesRequest.md)
- [ChannelCarrierCollectionMethodApi](docs/Model/ChannelCarrierCollectionMethodApi.md)
- [ChannelCarrierRecommendationApi](docs/Model/ChannelCarrierRecommendationApi.md)
- [ChannelChannelResponse](docs/Model/ChannelChannelResponse.md)
- [ChannelGlobalChannelResponse](docs/Model/ChannelGlobalChannelResponse.md)
- [ChannelListedProductResponse](docs/Model/ChannelListedProductResponse.md)
- [CollectionOfChannelGlobalChannelResponse](docs/Model/CollectionOfChannelGlobalChannelResponse.md)
- [CollectionOfChannelListedProductResponse](docs/Model/CollectionOfChannelListedProductResponse.md)
- [CollectionOfIPurchaseOrderByFilter](docs/Model/CollectionOfIPurchaseOrderByFilter.md)
- [CollectionOfMerchantCancellationResponse](docs/Model/CollectionOfMerchantCancellationResponse.md)
- [CollectionOfMerchantFulfillmentStockGetStockLocationsRequest](docs/Model/CollectionOfMerchantFulfillmentStockGetStockLocationsRequest.md)
- [CollectionOfMerchantNotificationResponse](docs/Model/CollectionOfMerchantNotificationResponse.md)
- [CollectionOfMerchantOfferGetStockResponse](docs/Model/CollectionOfMerchantOfferGetStockResponse.md)
- [CollectionOfMerchantOrderResponse](docs/Model/CollectionOfMerchantOrderResponse.md)
- [CollectionOfMerchantProductAttributeGroupWithLinkedChannelsResponse](docs/Model/CollectionOfMerchantProductAttributeGroupWithLinkedChannelsResponse.md)
- [CollectionOfMerchantProductAttributeGroupWithProductExtraDataResponse](docs/Model/CollectionOfMerchantProductAttributeGroupWithProductExtraDataResponse.md)
- [CollectionOfMerchantProductBundleResponse](docs/Model/CollectionOfMerchantProductBundleResponse.md)
- [CollectionOfMerchantProductResponse](docs/Model/CollectionOfMerchantProductResponse.md)
- [CollectionOfMerchantProductWithBuyBoxPrice](docs/Model/CollectionOfMerchantProductWithBuyBoxPrice.md)
- [CollectionOfMerchantReturnResponse](docs/Model/CollectionOfMerchantReturnResponse.md)
- [CollectionOfMerchantSettlementReportsResponse](docs/Model/CollectionOfMerchantSettlementReportsResponse.md)
- [CollectionOfMerchantShipmentLabelCarrierResponse](docs/Model/CollectionOfMerchantShipmentLabelCarrierResponse.md)
- [CollectionOfMerchantShipmentResponse](docs/Model/CollectionOfMerchantShipmentResponse.md)
- [CollectionOfMerchantSingleOrderReturnResponse](docs/Model/CollectionOfMerchantSingleOrderReturnResponse.md)
- [CollectionOfMerchantStockLocationWithCountryIsoResponse](docs/Model/CollectionOfMerchantStockLocationWithCountryIsoResponse.md)
- [CollectionOfMerchantWebhookResponse](docs/Model/CollectionOfMerchantWebhookResponse.md)
- [Condition](docs/Model/Condition.md)
- [CreatorFilter](docs/Model/CreatorFilter.md)
- [ExtraDataType](docs/Model/ExtraDataType.md)
- [FreezeProductRequest](docs/Model/FreezeProductRequest.md)
- [FreezingActionRequest](docs/Model/FreezingActionRequest.md)
- [FulfillmentType](docs/Model/FulfillmentType.md)
- [Gender](docs/Model/Gender.md)
- [IImportInformation](docs/Model/IImportInformation.md)
- [IPurchaseOrderByFilter](docs/Model/IPurchaseOrderByFilter.md)
- [IPurchaseOrderLineByFilter](docs/Model/IPurchaseOrderLineByFilter.md)
- [IVendorParty](docs/Model/IVendorParty.md)
- [ListedProductChannelStatus](docs/Model/ListedProductChannelStatus.md)
- [ListedProductExportStatus](docs/Model/ListedProductExportStatus.md)
- [MancoReason](docs/Model/MancoReason.md)
- [MerchantAcknowledgePurchaseOrder](docs/Model/MerchantAcknowledgePurchaseOrder.md)
- [MerchantAcknowledgePurchaseOrderLine](docs/Model/MerchantAcknowledgePurchaseOrderLine.md)
- [MerchantAddressResponse](docs/Model/MerchantAddressResponse.md)
- [MerchantCancellationLineRequest](docs/Model/MerchantCancellationLineRequest.md)
- [MerchantCancellationLineResponse](docs/Model/MerchantCancellationLineResponse.md)
- [MerchantCancellationRequest](docs/Model/MerchantCancellationRequest.md)
- [MerchantCancellationResponse](docs/Model/MerchantCancellationResponse.md)
- [MerchantChannelLabelShipmentRequest](docs/Model/MerchantChannelLabelShipmentRequest.md)
- [MerchantCreateReportResponse](docs/Model/MerchantCreateReportResponse.md)
- [MerchantCreateSettlementsReportRequest](docs/Model/MerchantCreateSettlementsReportRequest.md)
- [MerchantFulfillmentStockGetStockLocationsRequest](docs/Model/MerchantFulfillmentStockGetStockLocationsRequest.md)
- [MerchantGetReportStatusResponse](docs/Model/MerchantGetReportStatusResponse.md)
- [MerchantInvoiceUploadRequest](docs/Model/MerchantInvoiceUploadRequest.md)
- [MerchantNotificationResponse](docs/Model/MerchantNotificationResponse.md)
- [MerchantOfferGetStockResponse](docs/Model/MerchantOfferGetStockResponse.md)
- [MerchantOfferStockUpdateRequest](docs/Model/MerchantOfferStockUpdateRequest.md)
- [MerchantOrderAcknowledgementRequest](docs/Model/MerchantOrderAcknowledgementRequest.md)
- [MerchantOrderCommentUpdateRequest](docs/Model/MerchantOrderCommentUpdateRequest.md)
- [MerchantOrderLineExtraDataResponse](docs/Model/MerchantOrderLineExtraDataResponse.md)
- [MerchantOrderLineResponse](docs/Model/MerchantOrderLineResponse.md)
- [MerchantOrderResponse](docs/Model/MerchantOrderResponse.md)
- [MerchantProductAttributeGroupChannelInfoResponse](docs/Model/MerchantProductAttributeGroupChannelInfoResponse.md)
- [MerchantProductAttributeGroupWithLinkedChannelsResponse](docs/Model/MerchantProductAttributeGroupWithLinkedChannelsResponse.md)
- [MerchantProductAttributeGroupWithProductExtraDataResponse](docs/Model/MerchantProductAttributeGroupWithProductExtraDataResponse.md)
- [MerchantProductBundlePartResponse](docs/Model/MerchantProductBundlePartResponse.md)
- [MerchantProductBundleResponse](docs/Model/MerchantProductBundleResponse.md)
- [MerchantProductExtraDataItemRequest](docs/Model/MerchantProductExtraDataItemRequest.md)
- [MerchantProductExtraDataItemResponse](docs/Model/MerchantProductExtraDataItemResponse.md)
- [MerchantProductExtraDataRequest](docs/Model/MerchantProductExtraDataRequest.md)
- [MerchantProductExtraDataResponse](docs/Model/MerchantProductExtraDataResponse.md)
- [MerchantProductRequest](docs/Model/MerchantProductRequest.md)
- [MerchantProductResponse](docs/Model/MerchantProductResponse.md)
- [MerchantProductWithBuyBoxPrice](docs/Model/MerchantProductWithBuyBoxPrice.md)
- [MerchantPurchaseOrderInvoice](docs/Model/MerchantPurchaseOrderInvoice.md)
- [MerchantPurchaseOrderInvoiceLine](docs/Model/MerchantPurchaseOrderInvoiceLine.md)
- [MerchantReturnAcknowledgeRequest](docs/Model/MerchantReturnAcknowledgeRequest.md)
- [MerchantReturnLineRequest](docs/Model/MerchantReturnLineRequest.md)
- [MerchantReturnLineResponse](docs/Model/MerchantReturnLineResponse.md)
- [MerchantReturnLineUpdateRequest](docs/Model/MerchantReturnLineUpdateRequest.md)
- [MerchantReturnRequest](docs/Model/MerchantReturnRequest.md)
- [MerchantReturnResponse](docs/Model/MerchantReturnResponse.md)
- [MerchantReturnUpdateRequest](docs/Model/MerchantReturnUpdateRequest.md)
- [MerchantSettingsResponse](docs/Model/MerchantSettingsResponse.md)
- [MerchantSettlementReportsResponse](docs/Model/MerchantSettlementReportsResponse.md)
- [MerchantShipmentLabelCarrierRequest](docs/Model/MerchantShipmentLabelCarrierRequest.md)
- [MerchantShipmentLabelCarrierResponse](docs/Model/MerchantShipmentLabelCarrierResponse.md)
- [MerchantShipmentLineRequest](docs/Model/MerchantShipmentLineRequest.md)
- [MerchantShipmentLineResponse](docs/Model/MerchantShipmentLineResponse.md)
- [MerchantShipmentPackageDimensionsRequest](docs/Model/MerchantShipmentPackageDimensionsRequest.md)
- [MerchantShipmentPackageWeightRequest](docs/Model/MerchantShipmentPackageWeightRequest.md)
- [MerchantShipmentRequest](docs/Model/MerchantShipmentRequest.md)
- [MerchantShipmentResponse](docs/Model/MerchantShipmentResponse.md)
- [MerchantShipmentTrackingRequest](docs/Model/MerchantShipmentTrackingRequest.md)
- [MerchantSingleOrderReturnLineResponse](docs/Model/MerchantSingleOrderReturnLineResponse.md)
- [MerchantSingleOrderReturnResponse](docs/Model/MerchantSingleOrderReturnResponse.md)
- [MerchantStockLocationAddressRequest](docs/Model/MerchantStockLocationAddressRequest.md)
- [MerchantStockLocationCreateRequest](docs/Model/MerchantStockLocationCreateRequest.md)
- [MerchantStockLocationResponse](docs/Model/MerchantStockLocationResponse.md)
- [MerchantStockLocationUpdateRequest](docs/Model/MerchantStockLocationUpdateRequest.md)
- [MerchantStockLocationWithCountryIsoResponse](docs/Model/MerchantStockLocationWithCountryIsoResponse.md)
- [MerchantStockPriceUpdateRequest](docs/Model/MerchantStockPriceUpdateRequest.md)
- [MerchantVendorParty](docs/Model/MerchantVendorParty.md)
- [MerchantWebhookRequest](docs/Model/MerchantWebhookRequest.md)
- [MerchantWebhookResponse](docs/Model/MerchantWebhookResponse.md)
- [ModulesAdditionalDetailsType](docs/Model/ModulesAdditionalDetailsType.md)
- [ModulesAllowanceDetailsType](docs/Model/ModulesAllowanceDetailsType.md)
- [ModulesChargeDetailsType](docs/Model/ModulesChargeDetailsType.md)
- [ModulesPurchaseOrderInvoiceType](docs/Model/ModulesPurchaseOrderInvoiceType.md)
- [ModulesPurchaseOrderStatus](docs/Model/ModulesPurchaseOrderStatus.md)
- [ModulesPurchaseOrderType](docs/Model/ModulesPurchaseOrderType.md)
- [ModulesTaxRegistrationType](docs/Model/ModulesTaxRegistrationType.md)
- [ModulesTaxType](docs/Model/ModulesTaxType.md)
- [NotificationType](docs/Model/NotificationType.md)
- [Operation](docs/Model/Operation.md)
- [OrderStatusView](docs/Model/OrderStatusView.md)
- [OrderSupport](docs/Model/OrderSupport.md)
- [PackageDimensionsUnit](docs/Model/PackageDimensionsUnit.md)
- [PackageWeightUnit](docs/Model/PackageWeightUnit.md)
- [PatchMerchantProductDto](docs/Model/PatchMerchantProductDto.md)
- [ProductAttributeGroupRequest](docs/Model/ProductAttributeGroupRequest.md)
- [ProductCreationResult](docs/Model/ProductCreationResult.md)
- [ProductExtraDataRequest](docs/Model/ProductExtraDataRequest.md)
- [ProductMessage](docs/Model/ProductMessage.md)
- [PurchaseOrderAcknowledgementCode](docs/Model/PurchaseOrderAcknowledgementCode.md)
- [PurchaseOrderIdentifierType](docs/Model/PurchaseOrderIdentifierType.md)
- [PurchaseOrderInvoiceAdditionalDetails](docs/Model/PurchaseOrderInvoiceAdditionalDetails.md)
- [PurchaseOrderInvoiceAllowanceDetails](docs/Model/PurchaseOrderInvoiceAllowanceDetails.md)
- [PurchaseOrderInvoiceChargeDetails](docs/Model/PurchaseOrderInvoiceChargeDetails.md)
- [PurchaseOrderInvoiceTaxDetails](docs/Model/PurchaseOrderInvoiceTaxDetails.md)
- [PurchaseOrderLineIdentifierType](docs/Model/PurchaseOrderLineIdentifierType.md)
- [PurchaseOrderLineUnitOfMeasure](docs/Model/PurchaseOrderLineUnitOfMeasure.md)
- [PurchaseOrderRejectionReason](docs/Model/PurchaseOrderRejectionReason.md)
- [RemoveProductExtraDataRequests](docs/Model/RemoveProductExtraDataRequests.md)
- [RenameProductAttributeGroupRequests](docs/Model/RenameProductAttributeGroupRequests.md)
- [ReportStatus](docs/Model/ReportStatus.md)
- [ReportType](docs/Model/ReportType.md)
- [ReturnReason](docs/Model/ReturnReason.md)
- [ReturnStatus](docs/Model/ReturnStatus.md)
- [SettingsResponse](docs/Model/SettingsResponse.md)
- [ShipmentFulfillmentType](docs/Model/ShipmentFulfillmentType.md)
- [ShipmentLineStatus](docs/Model/ShipmentLineStatus.md)
- [ShipmentSettingsResponse](docs/Model/ShipmentSettingsResponse.md)
- [SingleMerchantAcknowledgePurchaseOrderLinesRequest](docs/Model/SingleMerchantAcknowledgePurchaseOrderLinesRequest.md)
- [SingleMerchantCreatePurchaseOrderInvoiceRequest](docs/Model/SingleMerchantCreatePurchaseOrderInvoiceRequest.md)
- [SingleOfApiResponse](docs/Model/SingleOfApiResponse.md)
- [SingleOfDictionaryOfStringAndListOfString](docs/Model/SingleOfDictionaryOfStringAndListOfString.md)
- [SingleOfMerchantProductResponse](docs/Model/SingleOfMerchantProductResponse.md)
- [SingleOfMerchantSettingsResponse](docs/Model/SingleOfMerchantSettingsResponse.md)
- [SingleOfProductCreationResult](docs/Model/SingleOfProductCreationResult.md)
- [SingleOfStockUpdateResponse](docs/Model/SingleOfStockUpdateResponse.md)
- [StockUpdateResponse](docs/Model/StockUpdateResponse.md)
- [VatRateType](docs/Model/VatRateType.md)
- [VatSettingsResponse](docs/Model/VatSettingsResponse.md)
- [WebhookEventType](docs/Model/WebhookEventType.md)

## Authorization

Authentication schemes defined for the API:
### apiKey

- **Type**: API key
- **API key parameter name**: apikey
- **Location**: URL query string


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `2.14.0`
    - Package version: `2.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
