# FriendsOfCE\Merchant\ApiClient\NotificationApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**notificationIndex()**](NotificationApi.md#notificationIndex) | **GET** /v2/notifications | Get Notifications. |


## `notificationIndex()`

```php
notificationIndex($fromDate, $toDate, $types, $merchantOrderNos, $channelOrderNos, $merchantReturnNos, $channelReturnNos, $merchantShipmentNos, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantNotificationResponse
```

Get Notifications.

Gets all notifications based on filter.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\NotificationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the notification date, starting from this date. This date is inclusive.
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the notification date, until this date. This date is exclusive.
$types = array(new \FriendsOfCE\Merchant\ApiClient\Model\\FriendsOfCE\Merchant\ApiClient\Model\NotificationType()); // \FriendsOfCE\Merchant\ApiClient\Model\NotificationType[] | Notification type(s) to filter on.
$merchantOrderNos = array('merchantOrderNos_example'); // string[] | Filter on unique order reference used by the merchant.
$channelOrderNos = array('channelOrderNos_example'); // string[] | Filter on unique order reference used by the channel.
$merchantReturnNos = array('merchantReturnNos_example'); // string[] | Filter on unique return reference used by the merchant.
$channelReturnNos = array('channelReturnNos_example'); // string[] | Filter on unique return reference used by the channel.
$merchantShipmentNos = array('merchantShipmentNos_example'); // string[] | Filter on unique shipment reference used by the merchant.
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->notificationIndex($fromDate, $toDate, $types, $merchantOrderNos, $channelOrderNos, $merchantReturnNos, $channelReturnNos, $merchantShipmentNos, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling NotificationApi->notificationIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **fromDate** | **\DateTime**| Filter on the notification date, starting from this date. This date is inclusive. | [optional] |
| **toDate** | **\DateTime**| Filter on the notification date, until this date. This date is exclusive. | [optional] |
| **types** | [**\FriendsOfCE\Merchant\ApiClient\Model\NotificationType[]**](../Model/\FriendsOfCE\Merchant\ApiClient\Model\NotificationType.md)| Notification type(s) to filter on. | [optional] |
| **merchantOrderNos** | [**string[]**](../Model/string.md)| Filter on unique order reference used by the merchant. | [optional] |
| **channelOrderNos** | [**string[]**](../Model/string.md)| Filter on unique order reference used by the channel. | [optional] |
| **merchantReturnNos** | [**string[]**](../Model/string.md)| Filter on unique return reference used by the merchant. | [optional] |
| **channelReturnNos** | [**string[]**](../Model/string.md)| Filter on unique return reference used by the channel. | [optional] |
| **merchantShipmentNos** | [**string[]**](../Model/string.md)| Filter on unique shipment reference used by the merchant. | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantNotificationResponse**](../Model/CollectionOfMerchantNotificationResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
