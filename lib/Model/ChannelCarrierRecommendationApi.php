<?php
/**
 * ChannelCarrierRecommendationApi
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
 * OpenAPI Generator version: 7.0.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FriendsOfCE\Merchant\ApiClient\Model;
use \FriendsOfCE\Merchant\ApiClient\ObjectSerializer;

/**
 * ChannelCarrierRecommendationApi Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ChannelCarrierRecommendationApi
{
    /**
     * Possible values of this enum
     */
    public const NEUTRAL = 'NEUTRAL';

    public const RECOMMENDED = 'RECOMMENDED';

    public const DISCOMMENDED = 'DISCOMMENDED';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NEUTRAL,
            self::RECOMMENDED,
            self::DISCOMMENDED
        ];
    }
}

