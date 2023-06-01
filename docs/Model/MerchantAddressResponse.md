# # MerchantAddressResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**line1** | **string** | The first address line, use this field if address validation is disabled in ChannelEngine. | [optional]
**line2** | **string** | The second address line, use this field if address validation is disabled in ChannelEngine. | [optional]
**line3** | **string** | The third address line, use this field if address validation is disabled in ChannelEngine. | [optional]
**gender** | [**\FriendsOfCE\Merchant\ApiClient\Model\Gender**](Gender.md) |  | [optional]
**companyName** | **string** | Optional. Company addressed too. | [optional]
**firstName** | **string** | The first name of the customer. | [optional]
**lastName** | **string** | The last name of the customer (includes the surname prefix [tussenvoegsel] like &#39;de&#39;, &#39;van&#39;, &#39;du&#39;). | [optional]
**streetName** | **string** | The name of the street (without house number information)  This field might be empty if address validation is disabled in ChannelEngine. | [optional]
**houseNr** | **string** | The house number  This field might be empty if address validation is disabled in ChannelEngine. | [optional]
**houseNrAddition** | **string** | Optional. Addition to the house number  If the address is: Groenhazengracht 2c, the address will be:  StreetName: Groenhazengracht  HouseNo: 2  HouseNrAddition: c  This field might be empty if address validation is disabled in ChannelEngine. | [optional]
**zipCode** | **string** | The zip or postal code. | [optional]
**city** | **string** | The name of the city. | [optional]
**region** | **string** | Optional. State/province/region. | [optional]
**countryIso** | **string** | For example: NL, BE, FR. | [optional]
**original** | **string** | Optional. The address as a single string: use in case the address lines are entered  as single lines and later parsed into street, house number and house number addition. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
