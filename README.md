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
*CancellationsApi* | [**cancellationMarkExportAsFailed**](docs/Api/CancellationsApi.md#cancellationmarkexportasfailed) | **POST** /v2/cancellations/mark-export-as-failed | 
*ChannelsApi* | [**channelPluginsGet**](docs/Api/ChannelsApi.md#channelpluginsget) | **GET** /v2/channels | Gets channels
*CompetitionPricesApi* | [**competitionPricesGetBuyBoxPrices**](docs/Api/CompetitionPricesApi.md#competitionpricesgetbuyboxprices) | **GET** /v2/competitionprices/buyboxprices | Gets the price from the buy box winner
*CustomFieldsApi* | [**customFieldsDeleteCustomFields**](docs/Api/CustomFieldsApi.md#customfieldsdeletecustomfields) | **DELETE** /v2/custom-fields | Delete custom fields by a given list of custom field ids (product extra data ids)
*CustomFieldsApi* | [**customFieldsGetCustomFields**](docs/Api/CustomFieldsApi.md#customfieldsgetcustomfields) | **GET** /v2/custom-fields | Gets custom fields
*FulfillmentStockApi* | [**fulfillmentStockGetFulfillmentStockWithStockLocations**](docs/Api/FulfillmentStockApi.md#fulfillmentstockgetfulfillmentstockwithstocklocations) | **GET** /v2/fulfillmentstock | Gets product stock across all warehouses with stock locations - Channel Fulfillment location
*ListedProductsApi* | [**listedProductGetByFilter**](docs/Api/ListedProductsApi.md#listedproductgetbyfilter) | **GET** /v2/channels/{channelId}/products | Gets products listed by channel
*NotificationsApi* | [**notificationIndex**](docs/Api/NotificationsApi.md#notificationindex) | **GET** /v2/notifications | Gets notifications
*OffersApi* | [**offerDeleteProductLevelStockLimits**](docs/Api/OffersApi.md#offerdeleteproductlevelstocklimits) | **DELETE** /v2/offer/{channelId}/product-level-stock-limitations | Remove product-level stock limitations for a specific channel.
*OffersApi* | [**offerGetProductLevelStockLimits**](docs/Api/OffersApi.md#offergetproductlevelstocklimits) | **GET** /v2/offer/{channelId}/product-level-stock-limitations | Get product-level stock limitations for a specific channel.
*OffersApi* | [**offerGetStock**](docs/Api/OffersApi.md#offergetstock) | **GET** /v2/offer/stock | Gets product stock across all warehouses
*OffersApi* | [**offerPostProductLevelStockLimits**](docs/Api/OffersApi.md#offerpostproductlevelstocklimits) | **POST** /v2/offer/{channelId}/product-level-stock-limitations | Sets product-level stock limitations for a specific channel.
*OffersApi* | [**offerStockPriceUpdate**](docs/Api/OffersApi.md#offerstockpriceupdate) | **PUT** /v2/offer | Updates stock and price
*OffersApi* | [**offerStockUpdate**](docs/Api/OffersApi.md#offerstockupdate) | **PUT** /v2/offer/stock | Updates stock
*OrderDocumentsApi* | [**orderDocumentsAcknowledgeDocument**](docs/Api/OrderDocumentsApi.md#orderdocumentsacknowledgedocument) | **POST** /v2/orders/documents/acknowledge | Acknowledge a document.
*OrderDocumentsApi* | [**orderDocumentsGetDocumentFileForOrder**](docs/Api/OrderDocumentsApi.md#orderdocumentsgetdocumentfilefororder) | **GET** /v2/orders/documents/file | Get document file for order.
*OrderDocumentsApi* | [**orderDocumentsGetDocumentsByFilter**](docs/Api/OrderDocumentsApi.md#orderdocumentsgetdocumentsbyfilter) | **GET** /v2/orders/documents | Get documents by filters
*OrdersApi* | [**orderAcknowledge**](docs/Api/OrdersApi.md#orderacknowledge) | **POST** /v2/orders/acknowledge | Acknowledges orders
*OrdersApi* | [**orderGetByFilter**](docs/Api/OrdersApi.md#ordergetbyfilter) | **GET** /v2/orders | Gets orders by filter
*OrdersApi* | [**orderGetNew**](docs/Api/OrdersApi.md#ordergetnew) | **GET** /v2/orders/new | Gets new orders
*OrdersApi* | [**orderInvoice**](docs/Api/OrdersApi.md#orderinvoice) | **GET** /v2/orders/{merchantOrderNo}/invoice | Generates an order invoice
*OrdersApi* | [**orderMarkExportAsFailed**](docs/Api/OrdersApi.md#ordermarkexportasfailed) | **POST** /v2/orders/mark-export-as-failed | 
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
*ProductBundlesApi* | [**productBundleCreate**](docs/Api/ProductBundlesApi.md#productbundlecreate) | **POST** /v2/productbundles | Create product bundles
*ProductBundlesApi* | [**productBundleGetByFilter**](docs/Api/ProductBundlesApi.md#productbundlegetbyfilter) | **GET** /v2/productbundles | Gets product bundles
*ProductBundlesApi* | [**productBundleUpdate**](docs/Api/ProductBundlesApi.md#productbundleupdate) | **PUT** /v2/productbundles | Update product bundles
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
*ProductsApi* | [**productV21Create**](docs/Api/ProductsApi.md#productv21create) | **POST** /v2.1/products | [CLOSED BETA - AUTHORIZED USERS ONLY] Create or update a product
*ProductsApi* | [**productV21Delete**](docs/Api/ProductsApi.md#productv21delete) | **DELETE** /v2.1/products | [CLOSED BETA - AUTHORIZED USERS ONLY] Delete a product
*ProductsApi* | [**productV21Patch**](docs/Api/ProductsApi.md#productv21patch) | **PATCH** /v2.1/products | [CLOSED BETA - AUTHORIZED USERS ONLY] Update part of a product
*PurchaseOrdersApi* | [**acknowledge**](docs/Api/PurchaseOrdersApi.md#acknowledge) | **POST** /v2/purchase-orders/lines/acknowledge | Acknowledges lines of a purchase order
*PurchaseOrdersApi* | [**create**](docs/Api/PurchaseOrdersApi.md#create) | **POST** /v2/purchase-orders/shipments | Create a purchase order shipment.
*PurchaseOrdersApi* | [**getByFilter**](docs/Api/PurchaseOrdersApi.md#getbyfilter) | **GET** /v2/purchase-orders/shipments/merchant | Gets purchase order shipments by filter
*PurchaseOrdersApi* | [**getByFilter_0**](docs/Api/PurchaseOrdersApi.md#getbyfilter_0) | **GET** /v2/purchase-orders | Gets purchase orders by filter
*PurchaseOrdersApi* | [**purchaseOrdersCreateInvoice**](docs/Api/PurchaseOrdersApi.md#purchaseorderscreateinvoice) | **POST** /v2/purchase-orders/invoice | Creates a purchase order invoice
*PurchaseOrdersApi* | [**purchaseOrdersCreateInvoices**](docs/Api/PurchaseOrdersApi.md#purchaseorderscreateinvoices) | **POST** /v2/purchase-orders/invoice/bulk | Creates a purchase order invoices in a bulk
*PurchaseOrdersApi* | [**update**](docs/Api/PurchaseOrdersApi.md#update) | **PUT** /v2/purchase-orders/shipments | Update a purchase order shipment.
*RefundsApi* | [**refundAcknowledge**](docs/Api/RefundsApi.md#refundacknowledge) | **POST** /v2.1/refunds/merchant/acknowledge | [CLOSED BETA - AUTHORIZED USERS ONLY] Acknowledge a refund
*RefundsApi* | [**refundCreate**](docs/Api/RefundsApi.md#refundcreate) | **POST** /v2.1/refunds/merchant | [CLOSED BETA - AUTHORIZED USERS ONLY] Create a refund
*RefundsApi* | [**refundGet**](docs/Api/RefundsApi.md#refundget) | **GET** /v2.1/refunds/merchant/{identifier} | [CLOSED BETA - AUTHORIZED USERS ONLY] Get refund by identifier
*RefundsApi* | [**refundGetByFilter**](docs/Api/RefundsApi.md#refundgetbyfilter) | **GET** /v2.1/refunds/merchant | [CLOSED BETA - AUTHORIZED USERS ONLY] Get refunds by filter
*RefundsApi* | [**refundUpsertReturnExtraData**](docs/Api/RefundsApi.md#refundupsertreturnextradata) | **PATCH** /v2.1/refunds/merchant/extra-data | [CLOSED BETA - AUTHORIZED USERS ONLY] Upsert extra data for a refund
*ReportsApi* | [**reportCreateSettlementsReport**](docs/Api/ReportsApi.md#reportcreatesettlementsreport) | **POST** /v2/reports/settlements | Creates a settlement report
*ReportsApi* | [**reportGetAvailableReports**](docs/Api/ReportsApi.md#reportgetavailablereports) | **GET** /v2/reports/available | Gets a report
*ReportsApi* | [**reportGetReport**](docs/Api/ReportsApi.md#reportgetreport) | **GET** /v2/reports/{reportId} | Gets a report
*ReportsApi* | [**reportGetStatus**](docs/Api/ReportsApi.md#reportgetstatus) | **GET** /v2/reports/{reportId}/status | Gets the status of a report
*ReturnsApi* | [**returnAcknowledge**](docs/Api/ReturnsApi.md#returnacknowledge) | **POST** /v2.1/returns/merchant/acknowledge | [CLOSED BETA - AUTHORIZED USERS ONLY] Acknowledge a return
*ReturnsApi* | [**returnAcknowledge_0**](docs/Api/ReturnsApi.md#returnacknowledge_0) | **POST** /v2/returns/merchant/acknowledge | Acknowledges a return
*ReturnsApi* | [**returnBulkHandle**](docs/Api/ReturnsApi.md#returnbulkhandle) | **POST** /v2.1/returns/merchant/bulk-handle | [CLOSED BETA - AUTHORIZED USERS ONLY] Handles returns in bulk
*ReturnsApi* | [**returnCreate**](docs/Api/ReturnsApi.md#returncreate) | **POST** /v2.1/returns/merchant | [CLOSED BETA - AUTHORIZED USERS ONLY] Create a return
*ReturnsApi* | [**returnDeclareForMerchant**](docs/Api/ReturnsApi.md#returndeclareformerchant) | **POST** /v2/returns/merchant | Creates merchant return
*ReturnsApi* | [**returnGet**](docs/Api/ReturnsApi.md#returnget) | **GET** /v2.1/returns/merchant/{identifier} | [CLOSED BETA - AUTHORIZED USERS ONLY] Get return by identifier
*ReturnsApi* | [**returnGetByFilter**](docs/Api/ReturnsApi.md#returngetbyfilter) | **GET** /v2.1/returns/merchant | [CLOSED BETA - AUTHORIZED USERS ONLY] Get returns by filter
*ReturnsApi* | [**returnGetByMerchantOrderNo**](docs/Api/ReturnsApi.md#returngetbymerchantorderno) | **GET** /v2/returns/merchant/{merchantOrderNo} | Gets a return
*ReturnsApi* | [**returnGetDeclaredByChannel**](docs/Api/ReturnsApi.md#returngetdeclaredbychannel) | **GET** /v2/returns/merchant | Gets marketplace returns
*ReturnsApi* | [**returnGetReturns**](docs/Api/ReturnsApi.md#returngetreturns) | **GET** /v2/returns | Gets returns by filter
*ReturnsApi* | [**returnGetUnhandled**](docs/Api/ReturnsApi.md#returngetunhandled) | **GET** /v2/returns/merchant/new | Gets unhandled returns
*ReturnsApi* | [**returnHandle**](docs/Api/ReturnsApi.md#returnhandle) | **POST** /v2.1/returns/merchant/handle | [CLOSED BETA - AUTHORIZED USERS ONLY] Handle a return
*ReturnsApi* | [**returnMarkExportAsFailed**](docs/Api/ReturnsApi.md#returnmarkexportasfailed) | **POST** /v2/returns/mark-export-as-failed | 
*ReturnsApi* | [**returnUpdateForMerchant**](docs/Api/ReturnsApi.md#returnupdateformerchant) | **PUT** /v2/returns | Marks returns as received
*ReturnsApi* | [**returnUpsertReturnExtraData**](docs/Api/ReturnsApi.md#returnupsertreturnextradata) | **PATCH** /v2.1/returns/merchant/extra-data | [CLOSED BETA - AUTHORIZED USERS ONLY] Upsert extra data for a return
*SettingsApi* | [**settingsGet**](docs/Api/SettingsApi.md#settingsget) | **GET** /v2/settings | Gets settings
*SettlementsApi* | [**settlementGetByFilter**](docs/Api/SettlementsApi.md#settlementgetbyfilter) | **GET** /v2/settlements | Gets settlements
*SettlementsApi* | [**settlementUploadSettlement**](docs/Api/SettlementsApi.md#settlementuploadsettlement) | **POST** /v2/settlements/upload | Uploads a settlement file to ChannelEngine.
*ShipmentsApi* | [**shipmentAirWaybillNo**](docs/Api/ShipmentsApi.md#shipmentairwaybillno) | **GET** /v2/orders/{merchantShipmentNo}/airwaybillno | Get the Air Waybill No for a shipment
*ShipmentsApi* | [**shipmentCreate**](docs/Api/ShipmentsApi.md#shipmentcreate) | **POST** /v2/shipments | Creates shipments
*ShipmentsApi* | [**shipmentCreateForChannelMethod**](docs/Api/ShipmentsApi.md#shipmentcreateforchannelmethod) | **POST** /v2/shipments/channelmethod | Creates a shipment and initiates shipping label generation
*ShipmentsApi* | [**shipmentGetShipmentLabelCarriers**](docs/Api/ShipmentsApi.md#shipmentgetshipmentlabelcarriers) | **POST** /v2/carriers/{merchantOrderNo} | Gets carriers providing shipping labels
*ShipmentsApi* | [**shipmentIndex**](docs/Api/ShipmentsApi.md#shipmentindex) | **GET** /v2/shipments/merchant | Gets shipments by filter
*ShipmentsApi* | [**shipmentMarkImportAsFailed**](docs/Api/ShipmentsApi.md#shipmentmarkimportasfailed) | **POST** /v2/shipments/mark-import-as-failed | 
*ShipmentsApi* | [**shipmentShippingLabel**](docs/Api/ShipmentsApi.md#shipmentshippinglabel) | **GET** /v2/orders/{merchantShipmentNo}/shippinglabel | Gets a shipping label
*ShipmentsApi* | [**shipmentUpdate**](docs/Api/ShipmentsApi.md#shipmentupdate) | **PUT** /v2/shipments/{merchantShipmentNo} | Updates a shipment
*ShipmentsApi* | [**shipmentUploadProofOfDelivery**](docs/Api/ShipmentsApi.md#shipmentuploadproofofdelivery) | **POST** /v2/shipments/{merchantShipmentNo}/proof-of-delivery | Uploads a proof of delivery document
*ShipmentsApi* | [**shipmentUpsertDeliveryState**](docs/Api/ShipmentsApi.md#shipmentupsertdeliverystate) | **PUT** /v2/shipments/{merchantShipmentNo}/delivery-state | 
*StockLocationsApi* | [**stockLocationCreate**](docs/Api/StockLocationsApi.md#stocklocationcreate) | **POST** /v2/stocklocations | Creates a stock location
*StockLocationsApi* | [**stockLocationIndex**](docs/Api/StockLocationsApi.md#stocklocationindex) | **GET** /v2/stocklocations | Gets stock locations
*SupportApi* | [**supportCreateTestOrderDocuments**](docs/Api/SupportApi.md#supportcreatetestorderdocuments) | **POST** /v2/testorderdocument | 
*SupportApi* | [**supportCreateTestOrders**](docs/Api/SupportApi.md#supportcreatetestorders) | **POST** /v2/supportorder | 
*SupportApi* | [**supportCreateTestShippingLabels**](docs/Api/SupportApi.md#supportcreatetestshippinglabels) | **POST** /v2/testshippinglabel | 
*TargetsApi* | [**targetsCreateTargets**](docs/Api/TargetsApi.md#targetscreatetargets) | **POST** /v2/targets | Creates multiple targets
*TargetsApi* | [**targetsDeleteTargets**](docs/Api/TargetsApi.md#targetsdeletetargets) | **DELETE** /v2/targets | Deletes multiple targets
*TargetsApi* | [**targetsEditTargets**](docs/Api/TargetsApi.md#targetsedittargets) | **PUT** /v2/targets | Edits multiple targets
*WebhooksApi* | [**webhooksCreate**](docs/Api/WebhooksApi.md#webhookscreate) | **POST** /v2/webhooks | Creates a webhook or update a deleted webhook and undelete it
*WebhooksApi* | [**webhooksDelete**](docs/Api/WebhooksApi.md#webhooksdelete) | **DELETE** /v2/webhooks/{webhookName} | Deletes a webhook
*WebhooksApi* | [**webhooksGetAll**](docs/Api/WebhooksApi.md#webhooksgetall) | **GET** /v2/webhooks | Gets webhooks
*WebhooksApi* | [**webhooksUpdate**](docs/Api/WebhooksApi.md#webhooksupdate) | **PUT** /v2/webhooks | Updates a webhook

## Models

- [AddProductExtraDataRequests](docs/Model/AddProductExtraDataRequests.md)
- [AdvanceSettingsResponse](docs/Model/AdvanceSettingsResponse.md)
- [AirWaybillResponse](docs/Model/AirWaybillResponse.md)
- [ApiResponse](docs/Model/ApiResponse.md)
- [AsyncApiResponse](docs/Model/AsyncApiResponse.md)
- [BaseAsyncApiResponse](docs/Model/BaseAsyncApiResponse.md)
- [BulkMerchantCreatePurchaseOrderInvoicesRequest](docs/Model/BulkMerchantCreatePurchaseOrderInvoicesRequest.md)
- [BulkMerchantHandleReturnsRequest](docs/Model/BulkMerchantHandleReturnsRequest.md)
- [BulkMerchantMarkExportAsFailedForCancellationsRequest](docs/Model/BulkMerchantMarkExportAsFailedForCancellationsRequest.md)
- [BulkMerchantMarkExportAsFailedForOrdersRequest](docs/Model/BulkMerchantMarkExportAsFailedForOrdersRequest.md)
- [BulkMerchantMarkExportAsFailedForReturnsRequest](docs/Model/BulkMerchantMarkExportAsFailedForReturnsRequest.md)
- [BulkMerchantMarkImportAsFailedForShipmentsRequest](docs/Model/BulkMerchantMarkImportAsFailedForShipmentsRequest.md)
- [BulkResultFromBaseResponse](docs/Model/BulkResultFromBaseResponse.md)
- [ChannelChannelResponse](docs/Model/ChannelChannelResponse.md)
- [ChannelGlobalChannelResponse](docs/Model/ChannelGlobalChannelResponse.md)
- [ChannelListedProductResponse](docs/Model/ChannelListedProductResponse.md)
- [CollectionOfChannelGlobalChannelResponse](docs/Model/CollectionOfChannelGlobalChannelResponse.md)
- [CollectionOfChannelListedProductResponse](docs/Model/CollectionOfChannelListedProductResponse.md)
- [CollectionOfCustomFieldResponse](docs/Model/CollectionOfCustomFieldResponse.md)
- [CollectionOfIDocumentByFilter](docs/Model/CollectionOfIDocumentByFilter.md)
- [CollectionOfIPurchaseOrderByFilter](docs/Model/CollectionOfIPurchaseOrderByFilter.md)
- [CollectionOfIPurchaseOrderShipmentByFilter](docs/Model/CollectionOfIPurchaseOrderShipmentByFilter.md)
- [CollectionOfIRefund](docs/Model/CollectionOfIRefund.md)
- [CollectionOfIReturn](docs/Model/CollectionOfIReturn.md)
- [CollectionOfMerchantCancellationResponse](docs/Model/CollectionOfMerchantCancellationResponse.md)
- [CollectionOfMerchantFulfillmentStockStockLocationsResponse](docs/Model/CollectionOfMerchantFulfillmentStockStockLocationsResponse.md)
- [CollectionOfMerchantNotificationResponse](docs/Model/CollectionOfMerchantNotificationResponse.md)
- [CollectionOfMerchantOfferGetStockResponse](docs/Model/CollectionOfMerchantOfferGetStockResponse.md)
- [CollectionOfMerchantOrderResponse](docs/Model/CollectionOfMerchantOrderResponse.md)
- [CollectionOfMerchantProductAttributeGroupWithLinkedChannelsResponse](docs/Model/CollectionOfMerchantProductAttributeGroupWithLinkedChannelsResponse.md)
- [CollectionOfMerchantProductAttributeGroupWithProductExtraDataResponse](docs/Model/CollectionOfMerchantProductAttributeGroupWithProductExtraDataResponse.md)
- [CollectionOfMerchantProductBundleResponse](docs/Model/CollectionOfMerchantProductBundleResponse.md)
- [CollectionOfMerchantProductLevelStockLimitsResponse](docs/Model/CollectionOfMerchantProductLevelStockLimitsResponse.md)
- [CollectionOfMerchantProductResponse](docs/Model/CollectionOfMerchantProductResponse.md)
- [CollectionOfMerchantProductWithBuyBoxPrice](docs/Model/CollectionOfMerchantProductWithBuyBoxPrice.md)
- [CollectionOfMerchantProductsStockLevelsResponse](docs/Model/CollectionOfMerchantProductsStockLevelsResponse.md)
- [CollectionOfMerchantReturnResponse](docs/Model/CollectionOfMerchantReturnResponse.md)
- [CollectionOfMerchantSettlementReportsResponse](docs/Model/CollectionOfMerchantSettlementReportsResponse.md)
- [CollectionOfMerchantShipmentLabelCarrierResponse](docs/Model/CollectionOfMerchantShipmentLabelCarrierResponse.md)
- [CollectionOfMerchantShipmentResponse](docs/Model/CollectionOfMerchantShipmentResponse.md)
- [CollectionOfMerchantSingleOrderReturnResponse](docs/Model/CollectionOfMerchantSingleOrderReturnResponse.md)
- [CollectionOfMerchantStockLocationWithCountryIsoResponse](docs/Model/CollectionOfMerchantStockLocationWithCountryIsoResponse.md)
- [CollectionOfMerchantWebhookResponse](docs/Model/CollectionOfMerchantWebhookResponse.md)
- [CollectionOfString](docs/Model/CollectionOfString.md)
- [CreateEditTargetRequest](docs/Model/CreateEditTargetRequest.md)
- [CreateEditTargetView](docs/Model/CreateEditTargetView.md)
- [CreatePurchaseOrderShipment](docs/Model/CreatePurchaseOrderShipment.md)
- [CreateTestExtraDataLine](docs/Model/CreateTestExtraDataLine.md)
- [CreateTestOrderDocumentsRequest](docs/Model/CreateTestOrderDocumentsRequest.md)
- [CreateTestOrderLine](docs/Model/CreateTestOrderLine.md)
- [CreateTestOrderRequest](docs/Model/CreateTestOrderRequest.md)
- [CreateTestOrdersRequest](docs/Model/CreateTestOrdersRequest.md)
- [CreateTestShippingLabelsRequest](docs/Model/CreateTestShippingLabelsRequest.md)
- [CustomFieldResponse](docs/Model/CustomFieldResponse.md)
- [DeleteTargetRequest](docs/Model/DeleteTargetRequest.md)
- [DeleteTargetResponseVm](docs/Model/DeleteTargetResponseVm.md)
- [DeleteTargetView](docs/Model/DeleteTargetView.md)
- [DeleteTargetsResponse](docs/Model/DeleteTargetsResponse.md)
- [ExtraDataItemRequest](docs/Model/ExtraDataItemRequest.md)
- [FreezeProductRequest](docs/Model/FreezeProductRequest.md)
- [IAddress](docs/Model/IAddress.md)
- [IDocumentByFilter](docs/Model/IDocumentByFilter.md)
- [IImportInformation](docs/Model/IImportInformation.md)
- [IPurchaseOrderByFilter](docs/Model/IPurchaseOrderByFilter.md)
- [IPurchaseOrderLineByFilter](docs/Model/IPurchaseOrderLineByFilter.md)
- [IPurchaseOrderShipmentByFilter](docs/Model/IPurchaseOrderShipmentByFilter.md)
- [IPurchaseOrderShipmentLineByFilter](docs/Model/IPurchaseOrderShipmentLineByFilter.md)
- [IRefund](docs/Model/IRefund.md)
- [IRefundCurrency](docs/Model/IRefundCurrency.md)
- [IRefundExtraData](docs/Model/IRefundExtraData.md)
- [IRefundLine](docs/Model/IRefundLine.md)
- [IRefundLineExtraData](docs/Model/IRefundLineExtraData.md)
- [IReturn](docs/Model/IReturn.md)
- [IReturnExtraData](docs/Model/IReturnExtraData.md)
- [IReturnLine](docs/Model/IReturnLine.md)
- [IReturnLineExtraData](docs/Model/IReturnLineExtraData.md)
- [IReturnLineHandlingResult](docs/Model/IReturnLineHandlingResult.md)
- [IVendorParty](docs/Model/IVendorParty.md)
- [JsonPatchOperationOfMerchantProductForPatch](docs/Model/JsonPatchOperationOfMerchantProductForPatch.md)
- [MerchantAcknowledgeDocumentRequest](docs/Model/MerchantAcknowledgeDocumentRequest.md)
- [MerchantAcknowledgePurchaseOrder](docs/Model/MerchantAcknowledgePurchaseOrder.md)
- [MerchantAcknowledgePurchaseOrderLine](docs/Model/MerchantAcknowledgePurchaseOrderLine.md)
- [MerchantAcknowledgeRefund](docs/Model/MerchantAcknowledgeRefund.md)
- [MerchantAcknowledgeReturn](docs/Model/MerchantAcknowledgeReturn.md)
- [MerchantAddressResponse](docs/Model/MerchantAddressResponse.md)
- [MerchantBundleOrderLineResponse](docs/Model/MerchantBundleOrderLineResponse.md)
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
- [MerchantMarkExportAsFailedIdentifier](docs/Model/MerchantMarkExportAsFailedIdentifier.md)
- [MerchantNotificationResponse](docs/Model/MerchantNotificationResponse.md)
- [MerchantOfferGetStockResponse](docs/Model/MerchantOfferGetStockResponse.md)
- [MerchantOfferStockUpdateRequest](docs/Model/MerchantOfferStockUpdateRequest.md)
- [MerchantOrderAcknowledgementRequest](docs/Model/MerchantOrderAcknowledgementRequest.md)
- [MerchantOrderCommentUpdateRequest](docs/Model/MerchantOrderCommentUpdateRequest.md)
- [MerchantOrderLineExtraDataResponse](docs/Model/MerchantOrderLineExtraDataResponse.md)
- [MerchantOrderLineResponse](docs/Model/MerchantOrderLineResponse.md)
- [MerchantOrderResponse](docs/Model/MerchantOrderResponse.md)
- [MerchantOrderServiceLineResponse](docs/Model/MerchantOrderServiceLineResponse.md)
- [MerchantPatchProduct](docs/Model/MerchantPatchProduct.md)
- [MerchantProductAttributeGroupChannelInfoResponse](docs/Model/MerchantProductAttributeGroupChannelInfoResponse.md)
- [MerchantProductAttributeGroupWithLinkedChannelsResponse](docs/Model/MerchantProductAttributeGroupWithLinkedChannelsResponse.md)
- [MerchantProductAttributeGroupWithProductExtraDataResponse](docs/Model/MerchantProductAttributeGroupWithProductExtraDataResponse.md)
- [MerchantProductBundlePartRequest](docs/Model/MerchantProductBundlePartRequest.md)
- [MerchantProductBundlePartResponse](docs/Model/MerchantProductBundlePartResponse.md)
- [MerchantProductBundleRequest](docs/Model/MerchantProductBundleRequest.md)
- [MerchantProductBundleResponse](docs/Model/MerchantProductBundleResponse.md)
- [MerchantProductExtraDataItemRequest](docs/Model/MerchantProductExtraDataItemRequest.md)
- [MerchantProductExtraDataItemResponse](docs/Model/MerchantProductExtraDataItemResponse.md)
- [MerchantProductExtraDataRequest](docs/Model/MerchantProductExtraDataRequest.md)
- [MerchantProductExtraDataResponse](docs/Model/MerchantProductExtraDataResponse.md)
- [MerchantProductLevelStockLimitsResponse](docs/Model/MerchantProductLevelStockLimitsResponse.md)
- [MerchantProductLocationLimitsResponse](docs/Model/MerchantProductLocationLimitsResponse.md)
- [MerchantProductLocationsRequest](docs/Model/MerchantProductLocationsRequest.md)
- [MerchantProductLocationsStockLimitationsRequest](docs/Model/MerchantProductLocationsStockLimitationsRequest.md)
- [MerchantProductRequest](docs/Model/MerchantProductRequest.md)
- [MerchantProductResponse](docs/Model/MerchantProductResponse.md)
- [MerchantProductStockLevelPersistRequest](docs/Model/MerchantProductStockLevelPersistRequest.md)
- [MerchantProductWithBuyBoxPrice](docs/Model/MerchantProductWithBuyBoxPrice.md)
- [MerchantProductsStockLevelLimitsDeleteRequest](docs/Model/MerchantProductsStockLevelLimitsDeleteRequest.md)
- [MerchantProductsStockLevelLimitsPersistRequest](docs/Model/MerchantProductsStockLevelLimitsPersistRequest.md)
- [MerchantProductsStockLevelResponse](docs/Model/MerchantProductsStockLevelResponse.md)
- [MerchantProductsStockLevelsResponse](docs/Model/MerchantProductsStockLevelsResponse.md)
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
- [MerchantShipmentDeliveryUpsert](docs/Model/MerchantShipmentDeliveryUpsert.md)
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
- [MerchantUpdateProductBundlePartRequest](docs/Model/MerchantUpdateProductBundlePartRequest.md)
- [MerchantUpdateProductBundleRequest](docs/Model/MerchantUpdateProductBundleRequest.md)
- [MerchantUpsertProduct](docs/Model/MerchantUpsertProduct.md)
- [MerchantUpsertRefundExtraData](docs/Model/MerchantUpsertRefundExtraData.md)
- [MerchantUpsertRefundExtraDataRequest](docs/Model/MerchantUpsertRefundExtraDataRequest.md)
- [MerchantUpsertReturnExtraData](docs/Model/MerchantUpsertReturnExtraData.md)
- [MerchantUpsertReturnExtraDataRequest](docs/Model/MerchantUpsertReturnExtraDataRequest.md)
- [MerchantVendorParty](docs/Model/MerchantVendorParty.md)
- [MerchantWebhookRequest](docs/Model/MerchantWebhookRequest.md)
- [MerchantWebhookResponse](docs/Model/MerchantWebhookResponse.md)
- [Operation](docs/Model/Operation.md)
- [PatchMerchantProductDto](docs/Model/PatchMerchantProductDto.md)
- [ProductAttributeGroupRequest](docs/Model/ProductAttributeGroupRequest.md)
- [ProductCreationResult](docs/Model/ProductCreationResult.md)
- [ProductExtraDataItemRequest](docs/Model/ProductExtraDataItemRequest.md)
- [ProductExtraDataRequest](docs/Model/ProductExtraDataRequest.md)
- [ProductMessage](docs/Model/ProductMessage.md)
- [PurchaseOrderInvoiceAdditionalDetails](docs/Model/PurchaseOrderInvoiceAdditionalDetails.md)
- [PurchaseOrderInvoiceAllowanceDetails](docs/Model/PurchaseOrderInvoiceAllowanceDetails.md)
- [PurchaseOrderInvoiceChargeDetails](docs/Model/PurchaseOrderInvoiceChargeDetails.md)
- [PurchaseOrderInvoiceTaxDetails](docs/Model/PurchaseOrderInvoiceTaxDetails.md)
- [PurchaseOrderShipmentLine](docs/Model/PurchaseOrderShipmentLine.md)
- [RemoveProductExtraDataRequests](docs/Model/RemoveProductExtraDataRequests.md)
- [RenameProductAttributeGroupRequests](docs/Model/RenameProductAttributeGroupRequests.md)
- [ReturnSupport](docs/Model/ReturnSupport.md)
- [SettingsResponse](docs/Model/SettingsResponse.md)
- [ShipmentDimensions](docs/Model/ShipmentDimensions.md)
- [ShipmentSettingsResponse](docs/Model/ShipmentSettingsResponse.md)
- [ShipmentWeight](docs/Model/ShipmentWeight.md)
- [SingleMerchantAcknowledgePurchaseOrderLinesRequest](docs/Model/SingleMerchantAcknowledgePurchaseOrderLinesRequest.md)
- [SingleMerchantAcknowledgeRefundRequest](docs/Model/SingleMerchantAcknowledgeRefundRequest.md)
- [SingleMerchantAcknowledgeReturnRequest](docs/Model/SingleMerchantAcknowledgeReturnRequest.md)
- [SingleMerchantCreatePurchaseOrderInvoiceRequest](docs/Model/SingleMerchantCreatePurchaseOrderInvoiceRequest.md)
- [SingleMerchantCreatePurchaseOrderShipmentRequest](docs/Model/SingleMerchantCreatePurchaseOrderShipmentRequest.md)
- [SingleMerchantCreateRefundRequest](docs/Model/SingleMerchantCreateRefundRequest.md)
- [SingleMerchantCreateReturnRequest](docs/Model/SingleMerchantCreateReturnRequest.md)
- [SingleMerchantHandleReturnRequest](docs/Model/SingleMerchantHandleReturnRequest.md)
- [SingleMerchantPatchProductRequest](docs/Model/SingleMerchantPatchProductRequest.md)
- [SingleMerchantUpdatePurchaseOrderShipmentRequest](docs/Model/SingleMerchantUpdatePurchaseOrderShipmentRequest.md)
- [SingleMerchantUpsertProductRequest](docs/Model/SingleMerchantUpsertProductRequest.md)
- [SingleOfAirWaybillResponse](docs/Model/SingleOfAirWaybillResponse.md)
- [SingleOfApiResponse](docs/Model/SingleOfApiResponse.md)
- [SingleOfBulkResultFromBaseResponse](docs/Model/SingleOfBulkResultFromBaseResponse.md)
- [SingleOfDeleteTargetsResponse](docs/Model/SingleOfDeleteTargetsResponse.md)
- [SingleOfDictionaryOfStringAndListOfString](docs/Model/SingleOfDictionaryOfStringAndListOfString.md)
- [SingleOfIRefund](docs/Model/SingleOfIRefund.md)
- [SingleOfIReturn](docs/Model/SingleOfIReturn.md)
- [SingleOfListOfTargetResponseVm](docs/Model/SingleOfListOfTargetResponseVm.md)
- [SingleOfMerchantProductResponse](docs/Model/SingleOfMerchantProductResponse.md)
- [SingleOfMerchantProductsStockLevelsResponse](docs/Model/SingleOfMerchantProductsStockLevelsResponse.md)
- [SingleOfMerchantSettingsResponse](docs/Model/SingleOfMerchantSettingsResponse.md)
- [SingleOfProductCreationResult](docs/Model/SingleOfProductCreationResult.md)
- [SupportOrderAddress](docs/Model/SupportOrderAddress.md)
- [TargetResponseVm](docs/Model/TargetResponseVm.md)
- [UpdatePurchaseOrderShipment](docs/Model/UpdatePurchaseOrderShipment.md)
- [Validation](docs/Model/Validation.md)
- [ValidationMessage](docs/Model/ValidationMessage.md)
- [VatSettingsResponse](docs/Model/VatSettingsResponse.md)

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

- API version: `2.22.12`
    - Package version: `2.22.12`
    - Generator version: `7.7.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
