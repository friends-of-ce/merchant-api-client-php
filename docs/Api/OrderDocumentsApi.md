# FriendsOfCE\Merchant\ApiClient\OrderDocumentsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**orderDocumentsAcknowledgeDocument()**](OrderDocumentsApi.md#orderDocumentsAcknowledgeDocument) | **POST** /v2/orders/documents/acknowledge | Acknowledge a document. |
| [**orderDocumentsGetDocumentFileForOrder()**](OrderDocumentsApi.md#orderDocumentsGetDocumentFileForOrder) | **GET** /v2/orders/documents/file | Get document file for order. |
| [**orderDocumentsGetDocumentsByFilter()**](OrderDocumentsApi.md#orderDocumentsGetDocumentsByFilter) | **GET** /v2/orders/documents | Get documents by filters |


## `orderDocumentsAcknowledgeDocument()`

```php
orderDocumentsAcknowledgeDocument($merchantAcknowledgeDocumentRequest): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIDocumentByFilter
```

Acknowledge a document.

Acknowledge a single document. By acknowledging the document the merchant can confirm that <br />the document has been received. These references will be used in the other API calls. <br />After a successful request, the document is marked as Merchant Acknowledged. <br />If the document is already acknowledged, you'll receive a 404 Bad request

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OrderDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantAcknowledgeDocumentRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantAcknowledgeDocumentRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantAcknowledgeDocumentRequest | Relations between the id's returned by ChannelEngine and the references which the merchant uses.

try {
    $result = $apiInstance->orderDocumentsAcknowledgeDocument($merchantAcknowledgeDocumentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentsApi->orderDocumentsAcknowledgeDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantAcknowledgeDocumentRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantAcknowledgeDocumentRequest**](../Model/MerchantAcknowledgeDocumentRequest.md)| Relations between the id&#39;s returned by ChannelEngine and the references which the merchant uses. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIDocumentByFilter**](../Model/CollectionOfIDocumentByFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderDocumentsGetDocumentFileForOrder()`

```php
orderDocumentsGetDocumentFileForOrder($documentId, $channelId): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIDocumentByFilter
```

Get document file for order.

Downloads the file of the order document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OrderDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$documentId = 56; // int
$channelId = 56; // int

try {
    $result = $apiInstance->orderDocumentsGetDocumentFileForOrder($documentId, $channelId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentsApi->orderDocumentsGetDocumentFileForOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **documentId** | **int**|  | |
| **channelId** | **int**|  | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIDocumentByFilter**](../Model/CollectionOfIDocumentByFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderDocumentsGetDocumentsByFilter()`

```php
orderDocumentsGetDocumentsByFilter($identifiersIdentifierType, $identifiersModels, $createdDateRangeFromDate, $createdDateRangeToDate, $channelIds, $onlyUnacknowledgedByMerchant, $type, $linkedWith, $pageNumber, $pageSize): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIDocumentByFilter
```

Get documents by filters

Fetch collection of documents based on the provided filters

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OrderDocumentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiersIdentifierType = 'identifiersIdentifierType_example'; // string | The type of identifier: which identifier to filter on
$identifiersModels = array('identifiersModels_example'); // string[] | The value (of the selected type) to filter on
$createdDateRangeFromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$createdDateRangeToDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$channelIds = array(56); // int[]
$onlyUnacknowledgedByMerchant = True; // bool
$type = 'type_example'; // string
$linkedWith = 'linkedWith_example'; // string
$pageNumber = 56; // int
$pageSize = 56; // int

try {
    $result = $apiInstance->orderDocumentsGetDocumentsByFilter($identifiersIdentifierType, $identifiersModels, $createdDateRangeFromDate, $createdDateRangeToDate, $channelIds, $onlyUnacknowledgedByMerchant, $type, $linkedWith, $pageNumber, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderDocumentsApi->orderDocumentsGetDocumentsByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifiersIdentifierType** | **string**| The type of identifier: which identifier to filter on | [optional] |
| **identifiersModels** | [**string[]**](../Model/string.md)| The value (of the selected type) to filter on | [optional] |
| **createdDateRangeFromDate** | **\DateTime**|  | [optional] |
| **createdDateRangeToDate** | **\DateTime**|  | [optional] |
| **channelIds** | [**int[]**](../Model/int.md)|  | [optional] |
| **onlyUnacknowledgedByMerchant** | **bool**|  | [optional] |
| **type** | **string**|  | [optional] |
| **linkedWith** | **string**|  | [optional] |
| **pageNumber** | **int**|  | [optional] |
| **pageSize** | **int**|  | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIDocumentByFilter**](../Model/CollectionOfIDocumentByFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
