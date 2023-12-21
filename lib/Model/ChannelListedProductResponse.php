<?php
/**
 * ChannelListedProductResponse
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

use \ArrayAccess;
use \FriendsOfCE\Merchant\ApiClient\ObjectSerializer;

/**
 * ChannelListedProductResponse Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChannelListedProductResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChannelListedProductResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'channelProductNo' => 'string',
        'channelStatus' => '\FriendsOfCE\Merchant\ApiClient\Model\ListedProductChannelStatus',
        'ean' => 'string',
        'exportStatus' => '\FriendsOfCE\Merchant\ApiClient\Model\ListedProductExportStatus',
        'merchantProductNo' => 'string',
        'lastExportedPrice' => 'float',
        'lastExportedStock' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'channelProductNo' => null,
        'channelStatus' => null,
        'ean' => null,
        'exportStatus' => null,
        'merchantProductNo' => null,
        'lastExportedPrice' => 'decimal',
        'lastExportedStock' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'channelProductNo' => true,
		'channelStatus' => false,
		'ean' => true,
		'exportStatus' => false,
		'merchantProductNo' => true,
		'lastExportedPrice' => true,
		'lastExportedStock' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'channelProductNo' => 'ChannelProductNo',
        'channelStatus' => 'ChannelStatus',
        'ean' => 'Ean',
        'exportStatus' => 'ExportStatus',
        'merchantProductNo' => 'MerchantProductNo',
        'lastExportedPrice' => 'LastExportedPrice',
        'lastExportedStock' => 'LastExportedStock'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'channelProductNo' => 'setChannelProductNo',
        'channelStatus' => 'setChannelStatus',
        'ean' => 'setEan',
        'exportStatus' => 'setExportStatus',
        'merchantProductNo' => 'setMerchantProductNo',
        'lastExportedPrice' => 'setLastExportedPrice',
        'lastExportedStock' => 'setLastExportedStock'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'channelProductNo' => 'getChannelProductNo',
        'channelStatus' => 'getChannelStatus',
        'ean' => 'getEan',
        'exportStatus' => 'getExportStatus',
        'merchantProductNo' => 'getMerchantProductNo',
        'lastExportedPrice' => 'getLastExportedPrice',
        'lastExportedStock' => 'getLastExportedStock'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('channelProductNo', $data ?? [], null);
        $this->setIfExists('channelStatus', $data ?? [], null);
        $this->setIfExists('ean', $data ?? [], null);
        $this->setIfExists('exportStatus', $data ?? [], null);
        $this->setIfExists('merchantProductNo', $data ?? [], null);
        $this->setIfExists('lastExportedPrice', $data ?? [], null);
        $this->setIfExists('lastExportedStock', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets channelProductNo
     *
     * @return string|null
     */
    public function getChannelProductNo()
    {
        return $this->container['channelProductNo'];
    }

    /**
     * Sets channelProductNo
     *
     * @param string|null $channelProductNo The unique product reference used by the Channel
     *
     * @return self
     */
    public function setChannelProductNo($channelProductNo)
    {
        if (is_null($channelProductNo)) {
            array_push($this->openAPINullablesSetToNull, 'channelProductNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channelProductNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channelProductNo'] = $channelProductNo;

        return $this;
    }

    /**
     * Gets channelStatus
     *
     * @return \FriendsOfCE\Merchant\ApiClient\Model\ListedProductChannelStatus|null
     */
    public function getChannelStatus()
    {
        return $this->container['channelStatus'];
    }

    /**
     * Sets channelStatus
     *
     * @param \FriendsOfCE\Merchant\ApiClient\Model\ListedProductChannelStatus|null $channelStatus channelStatus
     *
     * @return self
     */
    public function setChannelStatus($channelStatus)
    {
        if (is_null($channelStatus)) {
            throw new \InvalidArgumentException('non-nullable channelStatus cannot be null');
        }
        $this->container['channelStatus'] = $channelStatus;

        return $this;
    }

    /**
     * Gets ean
     *
     * @return string|null
     */
    public function getEan()
    {
        return $this->container['ean'];
    }

    /**
     * Sets ean
     *
     * @param string|null $ean EAN
     *
     * @return self
     */
    public function setEan($ean)
    {
        if (is_null($ean)) {
            array_push($this->openAPINullablesSetToNull, 'ean');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ean', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ean'] = $ean;

        return $this;
    }

    /**
     * Gets exportStatus
     *
     * @return \FriendsOfCE\Merchant\ApiClient\Model\ListedProductExportStatus|null
     */
    public function getExportStatus()
    {
        return $this->container['exportStatus'];
    }

    /**
     * Sets exportStatus
     *
     * @param \FriendsOfCE\Merchant\ApiClient\Model\ListedProductExportStatus|null $exportStatus exportStatus
     *
     * @return self
     */
    public function setExportStatus($exportStatus)
    {
        if (is_null($exportStatus)) {
            throw new \InvalidArgumentException('non-nullable exportStatus cannot be null');
        }
        $this->container['exportStatus'] = $exportStatus;

        return $this;
    }

    /**
     * Gets merchantProductNo
     *
     * @return string|null
     */
    public function getMerchantProductNo()
    {
        return $this->container['merchantProductNo'];
    }

    /**
     * Sets merchantProductNo
     *
     * @param string|null $merchantProductNo Your product number (SKU)
     *
     * @return self
     */
    public function setMerchantProductNo($merchantProductNo)
    {
        if (is_null($merchantProductNo)) {
            array_push($this->openAPINullablesSetToNull, 'merchantProductNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchantProductNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchantProductNo'] = $merchantProductNo;

        return $this;
    }

    /**
     * Gets lastExportedPrice
     *
     * @return float|null
     */
    public function getLastExportedPrice()
    {
        return $this->container['lastExportedPrice'];
    }

    /**
     * Sets lastExportedPrice
     *
     * @param float|null $lastExportedPrice Your product last exported price
     *
     * @return self
     */
    public function setLastExportedPrice($lastExportedPrice)
    {
        if (is_null($lastExportedPrice)) {
            array_push($this->openAPINullablesSetToNull, 'lastExportedPrice');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastExportedPrice', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lastExportedPrice'] = $lastExportedPrice;

        return $this;
    }

    /**
     * Gets lastExportedStock
     *
     * @return int|null
     */
    public function getLastExportedStock()
    {
        return $this->container['lastExportedStock'];
    }

    /**
     * Sets lastExportedStock
     *
     * @param int|null $lastExportedStock Your product last exported stock
     *
     * @return self
     */
    public function setLastExportedStock($lastExportedStock)
    {
        if (is_null($lastExportedStock)) {
            array_push($this->openAPINullablesSetToNull, 'lastExportedStock');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lastExportedStock', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lastExportedStock'] = $lastExportedStock;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


