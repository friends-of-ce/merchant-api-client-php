# FriendsOfCE\Merchant\ApiClient\SettlementApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**settlementGetByFilter()**](SettlementApi.md#settlementGetByFilter) | **GET** /v2/settlements | Gets settlements |


## `settlementGetByFilter()`

```php
settlementGetByFilter($channelIds, $fromStartDate, $toStartDate, $fromEndDate, $toEndDate, $fromCreateDate, $toCreateDate, $fromUpdateDate, $toUpdateDate, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantReportsResponse
```

Gets settlements

Gets the settlements based on the available filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\SettlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelIds = array(56); // int[] | Filter on channel id list.
$fromStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the start date of the settlement in ChannelEngine, until this date. This date is exclusive.
$toStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the start date of the settlement in ChannelEngine, until this date. This date is exclusive.
$fromEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the end date of the settlement in ChannelEngine, starting from this date. This date is inclusive.
$toEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the end date of the settlement in ChannelEngine, until this date. This date is exclusive.
$fromCreateDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the create date of the settlement in ChannelEngine, until this date. This date is exclusive.
$toCreateDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the create date of the settlement in ChannelEngine, until this date. This date is exclusive.
$fromUpdateDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the update date of the settlement in ChannelEngine, starting from this date. This date is inclusive.
$toUpdateDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the update date of the settlement in ChannelEngine, until this date. This date is exclusive.
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->settlementGetByFilter($channelIds, $fromStartDate, $toStartDate, $fromEndDate, $toEndDate, $fromCreateDate, $toCreateDate, $fromUpdateDate, $toUpdateDate, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementApi->settlementGetByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelIds** | [**int[]**](../Model/int.md)| Filter on channel id list. | [optional] |
| **fromStartDate** | **\DateTime**| Filter on the start date of the settlement in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **toStartDate** | **\DateTime**| Filter on the start date of the settlement in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **fromEndDate** | **\DateTime**| Filter on the end date of the settlement in ChannelEngine, starting from this date. This date is inclusive. | [optional] |
| **toEndDate** | **\DateTime**| Filter on the end date of the settlement in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **fromCreateDate** | **\DateTime**| Filter on the create date of the settlement in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **toCreateDate** | **\DateTime**| Filter on the create date of the settlement in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **fromUpdateDate** | **\DateTime**| Filter on the update date of the settlement in ChannelEngine, starting from this date. This date is inclusive. | [optional] |
| **toUpdateDate** | **\DateTime**| Filter on the update date of the settlement in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantReportsResponse**](../Model/CollectionOfMerchantReportsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
