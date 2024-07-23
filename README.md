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


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\CancellationsApi(
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
    echo 'Exception when calling CancellationsApi->cancellationCreate: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://demo.channelengine.net/api*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*CancellationsApi* | [**cancellationCreate**](docs/Api/CancellationsApi.md#cancellationcreate) | **POST** /v2/cancellations | Creates a cancelation
*CancellationsApi* | [**cancellationGetForMerchant**](docs/Api/CancellationsApi.md#cancellationgetformerchant) | **GET** /v2/cancellations/merchant | Gets cancelations
*ChannelsApi* | [**channelPluginsGet**](docs/Api/ChannelsApi.md#channelpluginsget) | **GET** /v2/channels | Gets channels
*CompetitionPricesApi* | [**competitionPricesGetBuyBoxPrices**](docs/Api/CompetitionPricesApi.md#competitionpricesgetbuyboxprices) | **GET** /v2/competitionprices/buyboxprices | Gets the price from the buy box winner
*FulfillmentStockApi* | [**fulfillmentStockGetFulfillementStockWithStockLocations**](docs/Api/FulfillmentStockApi.md#fulfillmentstockgetfulfillementstockwithstocklocations) | **GET** /v2/fulfillmentstock | Gets product stock across all warehouses with stock locations
*ListedProductsApi* | [**listedProductGetByFilter**](docs/Api/ListedProductsApi.md#listedproductgetbyfilter) | **GET** /v2/channels/{channelId}/products | Gets products listed by channel
*NotificationsApi* | [**notificationIndex**](docs/Api/NotificationsApi.md#notificationindex) | **GET** /v2/notifications | Gets notifications
*OffersApi* | [**offerGetStock**](docs/Api/OffersApi.md#offergetstock) | **GET** /v2/offer/stock | Gets product stock across all warehouses
*OffersApi* | [**offerStockPriceUpdate**](docs/Api/OffersApi.md#offerstockpriceupdate) | **PUT** /v2/offer | Updates stock and price
*OffersApi* | [**offerStockUpdate**](docs/Api/OffersApi.md#offerstockupdate) | **PUT** /v2/offer/stock | Updates stock
*OrdersApi* | [**orderAcknowledge**](docs/Api/OrdersApi.md#orderacknowledge) | **POST** /v2/orders/acknowledge | Acknowledges orders
*OrdersApi* | [**orderGetByFilter**](docs/Api/OrdersApi.md#ordergetbyfilter) | **GET** /v2/orders | Gets orders by filter
*OrdersApi* | [**orderGetNew**](docs/Api/OrdersApi.md#ordergetnew) | **GET** /v2/orders/new | Gets new orders
*OrdersApi* | [**orderInvoice**](docs/Api/OrdersApi.md#orderinvoice) | **GET** /v2/orders/{merchantOrderNo}/invoice | Generates an order invoice
*OrdersApi* | [**orderPackingSlip**](docs/Api/OrdersApi.md#orderpackingslip) | **GET** /v2/orders/{merchantOrderNo}/packingslip | Generates a packing slip
*OrdersApi* | [**orderUpdate**](docs/Api/OrdersApi.md#orderupdate) | **PUT** /v2/orders/comment | Updates an order comment
*OrdersApi* | [**orderUploadInvoice**](docs/Api/OrdersApi.md#orderuploadinvoice) | **POST** /v2/orders/{merchantOrderNo}/invoice | Uploads an order invoice
*OrdersApi* | [**orderUploadInvoiceAsString**](docs/Api/OrdersApi.md#orderuploadinvoiceasstring) | **POST** /v2/orders/{merchantOrderNo}/invoice-base64 | Uploads an order invoice PDF from Base64 string.
*ProductAttributesApi* | [**productAttributeGroupAddProductExtraData**](docs/Api/ProductAttributesApi.md#productattributegroupaddproductextradata) | **PUT** /v2/product-attribute-group/{groupName}/add | Adds custom attributes to a group
*ProductAttributesApi* | [**productAttributeGroupCreate**](docs/Api/ProductAttributesApi.md#productattributegroupcreate) | **POST** /v2/product-attribute-group | Creates a custom attribute group
*ProductAttributesApi* | [**productAttributeGroupDelete**](docs/Api/ProductAttributesApi.md#productattributegroupdelete) | **DELETE** /v2/product-attribute-group/{groupName} | Deletes a custom attribute group
*ProductAttributesApi* | [**productAttributeGroupGetByFilter**](docs/Api/ProductAttributesApi.md#productattributegroupgetbyfilter) | **GET** /v2/product-attribute-group | Gets custom attribute groups
*ProductAttributesApi* | [**productAttributeGroupGetWithChannelsByFilter**](docs/Api/ProductAttributesApi.md#productattributegroupgetwithchannelsbyfilter) | **GET** /v2/product-attribute-group/linked-channels | Gets custom attribute groups and linked marketplaces
*ProductAttributesApi* | [**productAttributeGroupRemoveProductExtraData**](docs/Api/ProductAttributesApi.md#productattributegroupremoveproductextradata) | **PUT** /v2/product-attribute-group/{groupName}/remove | Deletes custom attributes from a group
*ProductAttributesApi* | [**productAttributeGroupRenameProductAttributeGroup**](docs/Api/ProductAttributesApi.md#productattributegrouprenameproductattributegroup) | **POST** /v2/product-attribute-group/rename | Renames custom attribute groups
*ProductBundlesApi* | [**productBundleGetByFilter**](docs/Api/ProductBundlesApi.md#productbundlegetbyfilter) | **GET** /v2/productbundles | Gets product bundles
*ProductsApi* | [**productBulkDelete**](docs/Api/ProductsApi.md#productbulkdelete) | **POST** /v2/products/bulkdelete | Deletes products
*ProductsApi* | [**productBulkPatch**](docs/Api/ProductsApi.md#productbulkpatch) | **PATCH** /v2/products | Updates products attributes
*ProductsApi* | [**productBulkPatchExtraDataItems**](docs/Api/ProductsApi.md#productbulkpatchextradataitems) | **PATCH** /v2/products/extra-data/bulk | Adds, updates, or deletes custom attributes
*ProductsApi* | [**productCreate**](docs/Api/ProductsApi.md#productcreate) | **POST** /v2/products | Updates or creates products
*ProductsApi* | [**productDelete**](docs/Api/ProductsApi.md#productdelete) | **DELETE** /v2/products/{merchantProductNo} | Deletes a product
*ProductsApi* | [**productFreeze**](docs/Api/ProductsApi.md#productfreeze) | **POST** /v2/products/freeze | Updates selected products and sets them either to frozen or not-frozen status.
*ProductsApi* | [**productGetByFilter**](docs/Api/ProductsApi.md#productgetbyfilter) | **GET** /v2/products | Gets products
*ProductsApi* | [**productGetByMerchantProductNo**](docs/Api/ProductsApi.md#productgetbymerchantproductno) | **GET** /v2/products/{merchantProductNo} | Gets a product
*ProductsApi* | [**productPatch**](docs/Api/ProductsApi.md#productpatch) | **PATCH** /v2/products/{merchantProductNo} | Updates product attributes
*ProductsApi* | [**productPatchExtraDataItems**](docs/Api/ProductsApi.md#productpatchextradataitems) | **PATCH** /v2/products/extra-data | Adds, updates, or deletes a custom attribute
*PurchaseOrdersApi* | [**acknowledge**](docs/Api/PurchaseOrdersApi.md#acknowledge) | **POST** /v2/purchase-orders/lines/acknowledge | Acknowledges lines of a purchase order
*PurchaseOrdersApi* | [**create**](docs/Api/PurchaseOrdersApi.md#create) | **POST** /v2/purchase-orders/shipments | Create a purchase order shipment.
*PurchaseOrdersApi* | [**getByFilter**](docs/Api/PurchaseOrdersApi.md#getbyfilter) | **GET** /v2/purchase-orders/shipments/merchant | Gets purchase order shipments by filter
*PurchaseOrdersApi* | [**getByFilter_0**](docs/Api/PurchaseOrdersApi.md#getbyfilter_0) | **GET** /v2/purchase-orders | Gets purchase orders by filter
*PurchaseOrdersApi* | [**purchaseOrdersCreateInvoice**](docs/Api/PurchaseOrdersApi.md#purchaseorderscreateinvoice) | **POST** /v2/purchase-orders/invoice | Creates a purchase order invoice
*PurchaseOrdersApi* | [**purchaseOrdersCreateInvoices**](docs/Api/PurchaseOrdersApi.md#purchaseorderscreateinvoices) | **POST** /v2/purchase-orders/invoice/bulk | Creates a purchase order invoices in a bulk
*PurchaseOrdersApi* | [**update**](docs/Api/PurchaseOrdersApi.md#update) | **PUT** /v2/purchase-orders/shipments | Update a purchase order shipment.
*RefundsApi* | [**refundAcknowledge**](docs/Api/RefundsApi.md#refundacknowledge) | **POST** /v2.1/refunds/merchant/acknowledge | [CLOSED BETA] Acknowledge a refund
*RefundsApi* | [**refundCreate**](docs/Api/RefundsApi.md#refundcreate) | **POST** /v2.1/refunds/merchant | [CLOSED BETA] Create a refund
*RefundsApi* | [**refundGet**](docs/Api/RefundsApi.md#refundget) | **GET** /v2.1/refunds/merchant/{identifier} | [CLOSED BETA] Get refund by identifier
*RefundsApi* | [**refundGetByFilter**](docs/Api/RefundsApi.md#refundgetbyfilter) | **GET** /v2.1/refunds/merchant | [CLOSED BETA] Get refunds by filter
*ReportsApi* | [**reportCreateSettlementsReport**](docs/Api/ReportsApi.md#reportcreatesettlementsreport) | **POST** /v2/reports/settlements | Creates a settlement report
*ReportsApi* | [**reportGetReport**](docs/Api/ReportsApi.md#reportgetreport) | **GET** /v2/reports/{reportId} | Gets a settlement report
*ReportsApi* | [**reportGetStatus**](docs/Api/ReportsApi.md#reportgetstatus) | **GET** /v2/reports/{reportId}/status | Gets the status of a settlement report
*ReturnsApi* | [**returnAcknowledge**](docs/Api/ReturnsApi.md#returnacknowledge) | **POST** /v2.1/returns/merchant/acknowledge | [CLOSED BETA] Acknowledge a return
*ReturnsApi* | [**returnAcknowledge_0**](docs/Api/ReturnsApi.md#returnacknowledge_0) | **POST** /v2/returns/merchant/acknowledge | Acknowledges a return
*ReturnsApi* | [**returnCreate**](docs/Api/ReturnsApi.md#returncreate) | **POST** /v2.1/returns/merchant | [CLOSED BETA] Create a return
*ReturnsApi* | [**returnDeclareForMerchant**](docs/Api/ReturnsApi.md#returndeclareformerchant) | **POST** /v2/returns/merchant | Creates merchant return
*ReturnsApi* | [**returnGet**](docs/Api/ReturnsApi.md#returnget) | **GET** /v2.1/returns/merchant/{identifier} | [CLOSED BETA] Get return by identifier
*ReturnsApi* | [**returnGetByFilter**](docs/Api/ReturnsApi.md#returngetbyfilter) | **GET** /v2.1/returns/merchant | [CLOSED BETA] Get returns by filter
*ReturnsApi* | [**returnGetByMerchantOrderNo**](docs/Api/ReturnsApi.md#returngetbymerchantorderno) | **GET** /v2/returns/merchant/{merchantOrderNo} | Gets a return
*ReturnsApi* | [**returnGetDeclaredByChannel**](docs/Api/ReturnsApi.md#returngetdeclaredbychannel) | **GET** /v2/returns/merchant | Gets marketplace returns
*ReturnsApi* | [**returnGetReturns**](docs/Api/ReturnsApi.md#returngetreturns) | **GET** /v2/returns | Gets returns by filter
*ReturnsApi* | [**returnGetUnhandled**](docs/Api/ReturnsApi.md#returngetunhandled) | **GET** /v2/returns/merchant/new | Gets unhandled returns
*ReturnsApi* | [**returnHandle**](docs/Api/ReturnsApi.md#returnhandle) | **POST** /v2.1/returns/merchant/handle | [CLOSED BETA] Handle a return
*ReturnsApi* | [**returnUpdateForMerchant**](docs/Api/ReturnsApi.md#returnupdateformerchant) | **PUT** /v2/returns | Marks returns as received
*SettingsApi* | [**settingsGet**](docs/Api/SettingsApi.md#settingsget) | **GET** /v2/settings | Gets settings
*SettlementsApi* | [**settlementGetByFilter**](docs/Api/SettlementsApi.md#settlementgetbyfilter) | **GET** /v2/settlements | Gets settlements
*SettlementsApi* | [**settlementUploadSettlement**](docs/Api/SettlementsApi.md#settlementuploadsettlement) | **POST** /v2/settlements/upload | Imports a settlement file.
*ShipmentsApi* | [**shipmentCreate**](docs/Api/ShipmentsApi.md#shipmentcreate) | **POST** /v2/shipments | Creates shipments
*ShipmentsApi* | [**shipmentCreateForChannelMethod**](docs/Api/ShipmentsApi.md#shipmentcreateforchannelmethod) | **POST** /v2/shipments/channelmethod | Creates a shipment and initiates shipping label generation
*ShipmentsApi* | [**shipmentGetShipmentLabelCarriers**](docs/Api/ShipmentsApi.md#shipmentgetshipmentlabelcarriers) | **POST** /v2/carriers/{merchantOrderNo} | Gets carriers providing shipping labels
*ShipmentsApi* | [**shipmentIndex**](docs/Api/ShipmentsApi.md#shipmentindex) | **GET** /v2/shipments/merchant | Gets shipments by filter
*ShipmentsApi* | [**shipmentShippingLabel**](docs/Api/ShipmentsApi.md#shipmentshippinglabel) | **GET** /v2/orders/{merchantShipmentNo}/shippinglabel | Gets a shipping label
*ShipmentsApi* | [**shipmentUpdate**](docs/Api/ShipmentsApi.md#shipmentupdate) | **PUT** /v2/shipments/{merchantShipmentNo} | Updates a shipment
*StockLocationsApi* | [**stockLocationCreate**](docs/Api/StockLocationsApi.md#stocklocationcreate) | **POST** /v2/stocklocations | Creates a stock location
*StockLocationsApi* | [**stockLocationIndex**](docs/Api/StockLocationsApi.md#stocklocationindex) | **GET** /v2/stocklocations | Gets stock locations
*WebhooksApi* | [**webhooksCreate**](docs/Api/WebhooksApi.md#webhookscreate) | **POST** /v2/webhooks | Creates a webhook
*WebhooksApi* | [**webhooksDelete**](docs/Api/WebhooksApi.md#webhooksdelete) | **DELETE** /v2/webhooks/{webhookName} | Deletes a webhook
*WebhooksApi* | [**webhooksGetAll**](docs/Api/WebhooksApi.md#webhooksgetall) | **GET** /v2/webhooks | Gets webhooks
*WebhooksApi* | [**webhooksUpdate**](docs/Api/WebhooksApi.md#webhooksupdate) | **PUT** /v2/webhooks | Updates a webhook

## Models

- [AddProductExtraDataRequests](docs/Model/AddProductExtraDataRequests.md)
- [AdvanceSettingsResponse](docs/Model/AdvanceSettingsResponse.md)
- [ApiResponse](docs/Model/ApiResponse.md)
- [BulkMerchantCreatePurchaseOrderInvoicesRequest](docs/Model/BulkMerchantCreatePurchaseOrderInvoicesRequest.md)
- [ChangePurchaseOrderShipmentLine](docs/Model/ChangePurchaseOrderShipmentLine.md)
- [ChannelCarrierCollectionMethodApi](docs/Model/ChannelCarrierCollectionMethodApi.md)
- [ChannelCarrierRecommendationApi](docs/Model/ChannelCarrierRecommendationApi.md)
- [ChannelChannelResponse](docs/Model/ChannelChannelResponse.md)
- [ChannelExportStatus](docs/Model/ChannelExportStatus.md)
- [ChannelGlobalChannelResponse](docs/Model/ChannelGlobalChannelResponse.md)
- [ChannelListedProductResponse](docs/Model/ChannelListedProductResponse.md)
- [CollectionOfChannelGlobalChannelResponse](docs/Model/CollectionOfChannelGlobalChannelResponse.md)
- [CollectionOfChannelListedProductResponse](docs/Model/CollectionOfChannelListedProductResponse.md)
- [CollectionOfIPurchaseOrderByFilter](docs/Model/CollectionOfIPurchaseOrderByFilter.md)
- [CollectionOfIPurchaseOrderShipmentByFilter](docs/Model/CollectionOfIPurchaseOrderShipmentByFilter.md)
- [CollectionOfMerchantCancellationResponse](docs/Model/CollectionOfMerchantCancellationResponse.md)
- [CollectionOfMerchantFulfillmentStockStockLocationsResponse](docs/Model/CollectionOfMerchantFulfillmentStockStockLocationsResponse.md)
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
- [CreatePurchaseOrderShipment](docs/Model/CreatePurchaseOrderShipment.md)
- [CreatedByType](docs/Model/CreatedByType.md)
- [CreatorFilter](docs/Model/CreatorFilter.md)
- [CreatorType](docs/Model/CreatorType.md)
- [ExtraDataType](docs/Model/ExtraDataType.md)
- [FreezeProductRequest](docs/Model/FreezeProductRequest.md)
- [FreezingActionRequest](docs/Model/FreezingActionRequest.md)
- [FulfillmentType](docs/Model/FulfillmentType.md)
- [Gender](docs/Model/Gender.md)
- [IImportInformation](docs/Model/IImportInformation.md)
- [IPurchaseOrderByFilter](docs/Model/IPurchaseOrderByFilter.md)
- [IPurchaseOrderLineByFilter](docs/Model/IPurchaseOrderLineByFilter.md)
- [IPurchaseOrderShipmentByFilter](docs/Model/IPurchaseOrderShipmentByFilter.md)
- [IPurchaseOrderShipmentLineByFilter](docs/Model/IPurchaseOrderShipmentLineByFilter.md)
- [IRefund](docs/Model/IRefund.md)
- [IRefundCurrency](docs/Model/IRefundCurrency.md)
- [IRefundLine](docs/Model/IRefundLine.md)
- [IReturn](docs/Model/IReturn.md)
- [IReturnLine](docs/Model/IReturnLine.md)
- [IReturnLineHandlingResult](docs/Model/IReturnLineHandlingResult.md)
- [IVendorParty](docs/Model/IVendorParty.md)
- [ListedProductChannelStatus](docs/Model/ListedProductChannelStatus.md)
- [ListedProductExportStatus](docs/Model/ListedProductExportStatus.md)
- [MancoReason](docs/Model/MancoReason.md)
- [MerchantAcknowledgePurchaseOrder](docs/Model/MerchantAcknowledgePurchaseOrder.md)
- [MerchantAcknowledgePurchaseOrderLine](docs/Model/MerchantAcknowledgePurchaseOrderLine.md)
- [MerchantAcknowledgeRefund](docs/Model/MerchantAcknowledgeRefund.md)
- [MerchantAcknowledgeReturn](docs/Model/MerchantAcknowledgeReturn.md)
- [MerchantAddressResponse](docs/Model/MerchantAddressResponse.md)
- [MerchantCancellationLineRequest](docs/Model/MerchantCancellationLineRequest.md)
- [MerchantCancellationLineResponse](docs/Model/MerchantCancellationLineResponse.md)
- [MerchantCancellationRequest](docs/Model/MerchantCancellationRequest.md)
- [MerchantCancellationResponse](docs/Model/MerchantCancellationResponse.md)
- [MerchantChannelLabelShipmentRequest](docs/Model/MerchantChannelLabelShipmentRequest.md)
- [MerchantCreateRefund](docs/Model/MerchantCreateRefund.md)
- [MerchantCreateRefundLine](docs/Model/MerchantCreateRefundLine.md)
- [MerchantCreateReportResponse](docs/Model/MerchantCreateReportResponse.md)
- [MerchantCreateReturn](docs/Model/MerchantCreateReturn.md)
- [MerchantCreateReturnLine](docs/Model/MerchantCreateReturnLine.md)
- [MerchantCreateSettlementsReportRequest](docs/Model/MerchantCreateSettlementsReportRequest.md)
- [MerchantFulfillmentStockLocationItemResponse](docs/Model/MerchantFulfillmentStockLocationItemResponse.md)
- [MerchantFulfillmentStockStockLocationsResponse](docs/Model/MerchantFulfillmentStockStockLocationsResponse.md)
- [MerchantGetReportStatusResponse](docs/Model/MerchantGetReportStatusResponse.md)
- [MerchantHandleReturn](docs/Model/MerchantHandleReturn.md)
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
- [ModuleFulfillmentType](docs/Model/ModuleFulfillmentType.md)
- [ModuleReturnReason](docs/Model/ModuleReturnReason.md)
- [ModuleReturnStatus](docs/Model/ModuleReturnStatus.md)
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
- [OrderIdentifier](docs/Model/OrderIdentifier.md)
- [OrderLineIdentifier](docs/Model/OrderLineIdentifier.md)
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
- [PurchaseOrderRelatedItemExportStatus](docs/Model/PurchaseOrderRelatedItemExportStatus.md)
- [PurchaseOrderShipmentIdentifierTypeValue](docs/Model/PurchaseOrderShipmentIdentifierTypeValue.md)
- [RefundByFilterIdentifier](docs/Model/RefundByFilterIdentifier.md)
- [RefundIdentifier](docs/Model/RefundIdentifier.md)
- [RefundReason](docs/Model/RefundReason.md)
- [RemoveProductExtraDataRequests](docs/Model/RemoveProductExtraDataRequests.md)
- [RenameProductAttributeGroupRequests](docs/Model/RenameProductAttributeGroupRequests.md)
- [ReportStatus](docs/Model/ReportStatus.md)
- [ReportType](docs/Model/ReportType.md)
- [ReturnByFilterIdentifier](docs/Model/ReturnByFilterIdentifier.md)
- [ReturnHandlingAction](docs/Model/ReturnHandlingAction.md)
- [ReturnIdentifier](docs/Model/ReturnIdentifier.md)
- [ReturnLineIdentifier](docs/Model/ReturnLineIdentifier.md)
- [ReturnReason](docs/Model/ReturnReason.md)
- [ReturnStatus](docs/Model/ReturnStatus.md)
- [SettingsResponse](docs/Model/SettingsResponse.md)
- [ShipmentFulfillmentType](docs/Model/ShipmentFulfillmentType.md)
- [ShipmentLineStatus](docs/Model/ShipmentLineStatus.md)
- [ShipmentSettingsResponse](docs/Model/ShipmentSettingsResponse.md)
- [ShipmentType](docs/Model/ShipmentType.md)
- [SingleMerchantAcknowledgePurchaseOrderLinesRequest](docs/Model/SingleMerchantAcknowledgePurchaseOrderLinesRequest.md)
- [SingleMerchantAcknowledgeRefundRequest](docs/Model/SingleMerchantAcknowledgeRefundRequest.md)
- [SingleMerchantAcknowledgeReturnRequest](docs/Model/SingleMerchantAcknowledgeReturnRequest.md)
- [SingleMerchantCreatePurchaseOrderInvoiceRequest](docs/Model/SingleMerchantCreatePurchaseOrderInvoiceRequest.md)
- [SingleMerchantCreatePurchaseOrderShipmentRequest](docs/Model/SingleMerchantCreatePurchaseOrderShipmentRequest.md)
- [SingleMerchantCreateRefundRequest](docs/Model/SingleMerchantCreateRefundRequest.md)
- [SingleMerchantCreateReturnRequest](docs/Model/SingleMerchantCreateReturnRequest.md)
- [SingleMerchantHandleReturnRequest](docs/Model/SingleMerchantHandleReturnRequest.md)
- [SingleMerchantUpdatePurchaseOrderShipmentRequest](docs/Model/SingleMerchantUpdatePurchaseOrderShipmentRequest.md)
- [SingleOfApiResponse](docs/Model/SingleOfApiResponse.md)
- [SingleOfDictionaryOfStringAndListOfString](docs/Model/SingleOfDictionaryOfStringAndListOfString.md)
- [SingleOfIRefund](docs/Model/SingleOfIRefund.md)
- [SingleOfIReturn](docs/Model/SingleOfIReturn.md)
- [SingleOfMerchantProductResponse](docs/Model/SingleOfMerchantProductResponse.md)
- [SingleOfMerchantSettingsResponse](docs/Model/SingleOfMerchantSettingsResponse.md)
- [SingleOfProductCreationResult](docs/Model/SingleOfProductCreationResult.md)
- [UpdatePurchaseOrderShipment](docs/Model/UpdatePurchaseOrderShipment.md)
- [VatRateType](docs/Model/VatRateType.md)
- [VatSettingsResponse](docs/Model/VatSettingsResponse.md)
- [VolumeUnitOfMeasure](docs/Model/VolumeUnitOfMeasure.md)
- [WebhookEventType](docs/Model/WebhookEventType.md)
- [WeightUnitOfMeasure](docs/Model/WeightUnitOfMeasure.md)

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

- API version: `2.15.0`
    - Package version: `2.15.0.1`
    - Generator version: `7.7.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
