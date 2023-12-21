<?php
/**
 * ShipmentFulfillmentType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * The version of the OpenAPI document: 2.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FriendsOfCE\Merchant\ApiClient\Model;
use \FriendsOfCE\Merchant\ApiClient\ObjectSerializer;

/**
 * ShipmentFulfillmentType Class Doc Comment
 *
 * @category Class
 * @description Shipment is fully fulfilled by channel or merchant  so no make sense to use FulfillmentType for orders  It is created to keep it consistent with others
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShipmentFulfillmentType
{
    /**
     * Possible values of this enum
     */
    public const ALL = 'ALL';

    public const ONLY_MERCHANT = 'ONLY_MERCHANT';

    public const ONLY_CHANNEL = 'ONLY_CHANNEL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ALL,
            self::ONLY_MERCHANT,
            self::ONLY_CHANNEL
        ];
    }
}


