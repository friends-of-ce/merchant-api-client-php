<?php
/**
 * ListedProductChannelStatus
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
 * The version of the OpenAPI document: 2.15.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FriendsOfCE\Merchant\ApiClient\Model;
use \FriendsOfCE\Merchant\ApiClient\ObjectSerializer;

/**
 * ListedProductChannelStatus Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ListedProductChannelStatus
{
    /**
     * Possible values of this enum
     */
    public const NONE = 'NONE';

    public const PUBLISHED = 'PUBLISHED';

    public const NOT_PUBLISHED = 'NOT_PUBLISHED';

    public const UNKNOWN = 'UNKNOWN';

    public const UNDER_REVIEW = 'UNDER_REVIEW';

    public const INVALID_ON_CREATE = 'INVALID_ON_CREATE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::NONE,
            self::PUBLISHED,
            self::NOT_PUBLISHED,
            self::UNKNOWN,
            self::UNDER_REVIEW,
            self::INVALID_ON_CREATE
        ];
    }
}


