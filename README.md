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
*CancellationApi* | [**cancellationCreate**](docs/Api/CancellationApi.md#cancellationcreate) | **POST** /v2/cancellations | Create Cancellation.
*CancellationApi* | [**cancellationGetForMerchant**](docs/Api/CancellationApi.md#cancellationgetformerchant) | **GET** /v2/cancellations/merchant | Get Cancellations.
*ChannelsApi* | [**channelPluginsGet**](docs/Api/ChannelsApi.md#channelpluginsget) | **GET** /v2/channels | Get Channels.
*CompetitionPriceApi* | [**competitionPricesGetBuyBoxPrices**](docs/Api/CompetitionPriceApi.md#competitionpricesgetbuyboxprices) | **GET** /v2/competitionprices/buyboxprices | Get the BuyBox winner prices
*ListedProductsApi* | [**listedProductGetByFilter**](docs/Api/ListedProductsApi.md#listedproductgetbyfilter) | **GET** /v2/channels/{channelId}/products | Get Listed Products
*NotificationApi* | [**notificationIndex**](docs/Api/NotificationApi.md#notificationindex) | **GET** /v2/notifications | Get Notifications.
*OfferApi* | [**offerGetStock**](docs/Api/OfferApi.md#offergetstock) | **GET** /v2/offer/stock | Get stock for products.
*OfferApi* | [**offerStockPriceUpdate**](docs/Api/OfferApi.md#offerstockpriceupdate) | **PUT** /v2/offer | Update stock and/or price.
*OfferApi* | [**offerStockUpdate**](docs/Api/OfferApi.md#offerstockupdate) | **PUT** /v2/offer/stock | Update only stock.
*OrderApi* | [**orderAcknowledge**](docs/Api/OrderApi.md#orderacknowledge) | **POST** /v2/orders/acknowledge | Acknowledge Order.
*OrderApi* | [**orderGetByFilter**](docs/Api/OrderApi.md#ordergetbyfilter) | **GET** /v2/orders | Get Orders By Filter.
*OrderApi* | [**orderGetNew**](docs/Api/OrderApi.md#ordergetnew) | **GET** /v2/orders/new | Get New Orders.
*OrderApi* | [**orderInvoice**](docs/Api/OrderApi.md#orderinvoice) | **GET** /v2/orders/{merchantOrderNo}/invoice | Download Invoice.
*OrderApi* | [**orderPackingSlip**](docs/Api/OrderApi.md#orderpackingslip) | **GET** /v2/orders/{merchantOrderNo}/packingslip | Download Packing Slip.
*OrderApi* | [**orderUpdate**](docs/Api/OrderApi.md#orderupdate) | **PUT** /v2/orders/comment | Update Comment.
*OrderApi* | [**orderUploadInvoice**](docs/Api/OrderApi.md#orderuploadinvoice) | **POST** /v2/orders/{merchantOrderNo}/invoice | Upload Invoice.
*ProductApi* | [**productBulkDelete**](docs/Api/ProductApi.md#productbulkdelete) | **POST** /v2/products/bulkdelete | Delete multiple Products.
*ProductApi* | [**productBulkPatch**](docs/Api/ProductApi.md#productbulkpatch) | **PATCH** /v2/products | Bulk Patch Products
*ProductApi* | [**productBulkPatchExtraDataItems**](docs/Api/ProductApi.md#productbulkpatchextradataitems) | **PATCH** /v2/products/extra-data/bulk | Add/Update/Delete product extra data items.
*ProductApi* | [**productCreate**](docs/Api/ProductApi.md#productcreate) | **POST** /v2/products | Upsert Products.
*ProductApi* | [**productDelete**](docs/Api/ProductApi.md#productdelete) | **DELETE** /v2/products/{merchantProductNo} | Delete Product.
*ProductApi* | [**productGetByFilter**](docs/Api/ProductApi.md#productgetbyfilter) | **GET** /v2/products | Get Products.
*ProductApi* | [**productGetByMerchantProductNo**](docs/Api/ProductApi.md#productgetbymerchantproductno) | **GET** /v2/products/{merchantProductNo} | Get Product.
*ProductApi* | [**productPatch**](docs/Api/ProductApi.md#productpatch) | **PATCH** /v2/products/{merchantProductNo} | Patch product
*ProductApi* | [**productPatchExtraDataItems**](docs/Api/ProductApi.md#productpatchextradataitems) | **PATCH** /v2/products/extra-data | Add/Update/Delete a product&#39;s extra data items
*ProductAttributeGroupApi* | [**productAttributeGroupAddProductExtraData**](docs/Api/ProductAttributeGroupApi.md#productattributegroupaddproductextradata) | **PUT** /v2/product-attribute-group/{groupName}/add | Adds multiple product extra data to product attribute group.
*ProductAttributeGroupApi* | [**productAttributeGroupCreate**](docs/Api/ProductAttributeGroupApi.md#productattributegroupcreate) | **POST** /v2/product-attribute-group | Create product attribute groups.
*ProductAttributeGroupApi* | [**productAttributeGroupDelete**](docs/Api/ProductAttributeGroupApi.md#productattributegroupdelete) | **DELETE** /v2/product-attribute-group/{groupName} | Delete product attribute group.
*ProductAttributeGroupApi* | [**productAttributeGroupGetByFilter**](docs/Api/ProductAttributeGroupApi.md#productattributegroupgetbyfilter) | **GET** /v2/product-attribute-group | Get product attribute groups with the keys of all linked custom fields.
*ProductAttributeGroupApi* | [**productAttributeGroupGetWithChannelsByFilter**](docs/Api/ProductAttributeGroupApi.md#productattributegroupgetwithchannelsbyfilter) | **GET** /v2/product-attribute-group/linked-channels | Get product attribute groups with linked channels.
*ProductAttributeGroupApi* | [**productAttributeGroupRemoveProductExtraData**](docs/Api/ProductAttributeGroupApi.md#productattributegroupremoveproductextradata) | **PUT** /v2/product-attribute-group/{groupName}/remove | Removes multiple product extra data from product attribute group.
*ProductAttributeGroupApi* | [**productAttributeGroupRenameProductAttributeGroup**](docs/Api/ProductAttributeGroupApi.md#productattributegrouprenameproductattributegroup) | **POST** /v2/product-attribute-group/rename | Renames multiple product attribute groups.
*ProductBundleApi* | [**productBundleGetByFilter**](docs/Api/ProductBundleApi.md#productbundlegetbyfilter) | **GET** /v2/productbundles | Get product bundles.
*ReportApi* | [**reportCreateSettlementsReport**](docs/Api/ReportApi.md#reportcreatesettlementsreport) | **POST** /v2/reports/settlements | Create settlements report
*ReportApi* | [**reportGetReport**](docs/Api/ReportApi.md#reportgetreport) | **GET** /v2/reports/{reportId} | Get report
*ReportApi* | [**reportGetStatus**](docs/Api/ReportApi.md#reportgetstatus) | **GET** /v2/reports/{reportId}/status | Check report status
*ReturnApi* | [**returnAcknowledge**](docs/Api/ReturnApi.md#returnacknowledge) | **POST** /v2/returns/merchant/acknowledge | Acknowledge Return.
*ReturnApi* | [**returnDeclareForMerchant**](docs/Api/ReturnApi.md#returndeclareformerchant) | **POST** /v2/returns/merchant | Create Return.
*ReturnApi* | [**returnGetByMerchantOrderNo**](docs/Api/ReturnApi.md#returngetbymerchantorderno) | **GET** /v2/returns/merchant/{merchantOrderNo} | Get Return.
*ReturnApi* | [**returnGetDeclaredByChannel**](docs/Api/ReturnApi.md#returngetdeclaredbychannel) | **GET** /v2/returns/merchant | Get Returns.
*ReturnApi* | [**returnGetReturns**](docs/Api/ReturnApi.md#returngetreturns) | **GET** /v2/returns | Get Returns.
*ReturnApi* | [**returnGetUnhandled**](docs/Api/ReturnApi.md#returngetunhandled) | **GET** /v2/returns/merchant/new | Get Unhandled Returns.
*ReturnApi* | [**returnUpdateForMerchant**](docs/Api/ReturnApi.md#returnupdateformerchant) | **PUT** /v2/returns | Mark a return as received.
*SettingsApi* | [**settingsGet**](docs/Api/SettingsApi.md#settingsget) | **GET** /v2/settings | Get settings.
*SettlementApi* | [**settlementGetByFilter**](docs/Api/SettlementApi.md#settlementgetbyfilter) | **GET** /v2/settlements | Get settelmets
*ShipmentApi* | [**shipmentCreate**](docs/Api/ShipmentApi.md#shipmentcreate) | **POST** /v2/shipments | Create Shipment.
*ShipmentApi* | [**shipmentCreateForChannelMethod**](docs/Api/ShipmentApi.md#shipmentcreateforchannelmethod) | **POST** /v2/shipments/channelmethod | Create shipment for channel provided shipping labels
*ShipmentApi* | [**shipmentGetShipmentLabelCarriers**](docs/Api/ShipmentApi.md#shipmentgetshipmentlabelcarriers) | **POST** /v2/carriers/{merchantOrderNo} | Get carriers for channel provided shipping labels
*ShipmentApi* | [**shipmentIndex**](docs/Api/ShipmentApi.md#shipmentindex) | **GET** /v2/shipments/merchant | Get Shipments
*ShipmentApi* | [**shipmentShippingLabel**](docs/Api/ShipmentApi.md#shipmentshippinglabel) | **GET** /v2/orders/{merchantShipmentNo}/shippinglabel | Download shipping label.
*ShipmentApi* | [**shipmentUpdate**](docs/Api/ShipmentApi.md#shipmentupdate) | **PUT** /v2/shipments/{merchantShipmentNo} | Update Shipment.
*StockLocationApi* | [**stockLocationCreate**](docs/Api/StockLocationApi.md#stocklocationcreate) | **POST** /v2/stocklocations | 
*StockLocationApi* | [**stockLocationIndex**](docs/Api/StockLocationApi.md#stocklocationindex) | **GET** /v2/stocklocations | Get the stock locations (or virtual warehouses).
*WebhookApi* | [**webhooksCreate**](docs/Api/WebhookApi.md#webhookscreate) | **POST** /v2/webhooks | Create Webhook.
*WebhookApi* | [**webhooksDelete**](docs/Api/WebhookApi.md#webhooksdelete) | **DELETE** /v2/webhooks/{webhookName} | Delete Webhook.
*WebhookApi* | [**webhooksGetAll**](docs/Api/WebhookApi.md#webhooksgetall) | **GET** /v2/webhooks | Get Webhooks.
*WebhookApi* | [**webhooksUpdate**](docs/Api/WebhookApi.md#webhooksupdate) | **PUT** /v2/webhooks | Update Webhook.

## Models

- [AddProductExtraDataRequests](docs/Model/AddProductExtraDataRequests.md)
- [AdvanceSettingsResponse](docs/Model/AdvanceSettingsResponse.md)
- [ApiResponse](docs/Model/ApiResponse.md)
- [ChannelCarrierCollectionMethodApi](docs/Model/ChannelCarrierCollectionMethodApi.md)
- [ChannelCarrierRecommendationApi](docs/Model/ChannelCarrierRecommendationApi.md)
- [ChannelChannelResponse](docs/Model/ChannelChannelResponse.md)
- [ChannelGlobalChannelResponse](docs/Model/ChannelGlobalChannelResponse.md)
- [ChannelListedProductResponse](docs/Model/ChannelListedProductResponse.md)
- [CollectionOfChannelGlobalChannelResponse](docs/Model/CollectionOfChannelGlobalChannelResponse.md)
- [CollectionOfChannelListedProductResponse](docs/Model/CollectionOfChannelListedProductResponse.md)
- [CollectionOfMerchantCancellationResponse](docs/Model/CollectionOfMerchantCancellationResponse.md)
- [CollectionOfMerchantNotificationResponse](docs/Model/CollectionOfMerchantNotificationResponse.md)
- [CollectionOfMerchantOfferGetStockResponse](docs/Model/CollectionOfMerchantOfferGetStockResponse.md)
- [CollectionOfMerchantOrderResponse](docs/Model/CollectionOfMerchantOrderResponse.md)
- [CollectionOfMerchantProductAttributeGroupWithLinkedChannelsResponse](docs/Model/CollectionOfMerchantProductAttributeGroupWithLinkedChannelsResponse.md)
- [CollectionOfMerchantProductAttributeGroupWithProductExtraDataResponse](docs/Model/CollectionOfMerchantProductAttributeGroupWithProductExtraDataResponse.md)
- [CollectionOfMerchantProductBundleResponse](docs/Model/CollectionOfMerchantProductBundleResponse.md)
- [CollectionOfMerchantProductResponse](docs/Model/CollectionOfMerchantProductResponse.md)
- [CollectionOfMerchantProductWithBuyBoxPrice](docs/Model/CollectionOfMerchantProductWithBuyBoxPrice.md)
- [CollectionOfMerchantReportsResponse](docs/Model/CollectionOfMerchantReportsResponse.md)
- [CollectionOfMerchantReturnResponse](docs/Model/CollectionOfMerchantReturnResponse.md)
- [CollectionOfMerchantShipmentLabelCarrierResponse](docs/Model/CollectionOfMerchantShipmentLabelCarrierResponse.md)
- [CollectionOfMerchantShipmentResponse](docs/Model/CollectionOfMerchantShipmentResponse.md)
- [CollectionOfMerchantSingleOrderReturnResponse](docs/Model/CollectionOfMerchantSingleOrderReturnResponse.md)
- [CollectionOfMerchantStockLocationWithCountryIsoResponse](docs/Model/CollectionOfMerchantStockLocationWithCountryIsoResponse.md)
- [CollectionOfMerchantWebhookResponse](docs/Model/CollectionOfMerchantWebhookResponse.md)
- [Condition](docs/Model/Condition.md)
- [CreatorFilter](docs/Model/CreatorFilter.md)
- [ExtraDataType](docs/Model/ExtraDataType.md)
- [FulfillmentType](docs/Model/FulfillmentType.md)
- [Gender](docs/Model/Gender.md)
- [ListedProductChannelStatus](docs/Model/ListedProductChannelStatus.md)
- [ListedProductExportStatus](docs/Model/ListedProductExportStatus.md)
- [MancoReason](docs/Model/MancoReason.md)
- [MerchantAddressResponse](docs/Model/MerchantAddressResponse.md)
- [MerchantCancellationLineRequest](docs/Model/MerchantCancellationLineRequest.md)
- [MerchantCancellationLineResponse](docs/Model/MerchantCancellationLineResponse.md)
- [MerchantCancellationRequest](docs/Model/MerchantCancellationRequest.md)
- [MerchantCancellationResponse](docs/Model/MerchantCancellationResponse.md)
- [MerchantChannelLabelShipmentRequest](docs/Model/MerchantChannelLabelShipmentRequest.md)
- [MerchantCreateReportResponse](docs/Model/MerchantCreateReportResponse.md)
- [MerchantCreateSettlementsReportRequest](docs/Model/MerchantCreateSettlementsReportRequest.md)
- [MerchantGetReportStatusResponse](docs/Model/MerchantGetReportStatusResponse.md)
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
- [MerchantReportsResponse](docs/Model/MerchantReportsResponse.md)
- [MerchantReturnAcknowledgeRequest](docs/Model/MerchantReturnAcknowledgeRequest.md)
- [MerchantReturnLineRequest](docs/Model/MerchantReturnLineRequest.md)
- [MerchantReturnLineResponse](docs/Model/MerchantReturnLineResponse.md)
- [MerchantReturnLineUpdateRequest](docs/Model/MerchantReturnLineUpdateRequest.md)
- [MerchantReturnRequest](docs/Model/MerchantReturnRequest.md)
- [MerchantReturnResponse](docs/Model/MerchantReturnResponse.md)
- [MerchantReturnUpdateRequest](docs/Model/MerchantReturnUpdateRequest.md)
- [MerchantSettingsResponse](docs/Model/MerchantSettingsResponse.md)
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
- [MerchantWebhookRequest](docs/Model/MerchantWebhookRequest.md)
- [MerchantWebhookResponse](docs/Model/MerchantWebhookResponse.md)
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
- [SingleOfDictionaryOfStringAndListOfString](docs/Model/SingleOfDictionaryOfStringAndListOfString.md)
- [SingleOfMerchantProductResponse](docs/Model/SingleOfMerchantProductResponse.md)
- [SingleOfMerchantSettingsResponse](docs/Model/SingleOfMerchantSettingsResponse.md)
- [SingleOfProductCreationResult](docs/Model/SingleOfProductCreationResult.md)
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

- API version: `2.13.0`
    - Package version: `2.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
