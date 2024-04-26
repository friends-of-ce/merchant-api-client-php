<?php
/**
 * MerchantChannelLabelShipmentRequest
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
 * The version of the OpenAPI document: 2.14.0
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
 * MerchantChannelLabelShipmentRequest Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantChannelLabelShipmentRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantChannelLabelShipmentRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'dimensions' => '\FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentPackageDimensionsRequest',
        'weight' => '\FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentPackageWeightRequest',
        'channelMethodCode' => 'string',
        'merchantShipmentNo' => 'string',
        'merchantOrderNo' => 'string',
        'shippedFromCountryCode' => 'string',
        'shippedFromStockLocationId' => 'int',
        'lines' => '\FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentLineRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'dimensions' => null,
        'weight' => null,
        'channelMethodCode' => null,
        'merchantShipmentNo' => null,
        'merchantOrderNo' => null,
        'shippedFromCountryCode' => null,
        'shippedFromStockLocationId' => 'int32',
        'lines' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'dimensions' => false,
		'weight' => false,
		'channelMethodCode' => false,
		'merchantShipmentNo' => false,
		'merchantOrderNo' => false,
		'shippedFromCountryCode' => true,
		'shippedFromStockLocationId' => true,
		'lines' => false
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
        'dimensions' => 'Dimensions',
        'weight' => 'Weight',
        'channelMethodCode' => 'ChannelMethodCode',
        'merchantShipmentNo' => 'MerchantShipmentNo',
        'merchantOrderNo' => 'MerchantOrderNo',
        'shippedFromCountryCode' => 'ShippedFromCountryCode',
        'shippedFromStockLocationId' => 'ShippedFromStockLocationId',
        'lines' => 'Lines'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'dimensions' => 'setDimensions',
        'weight' => 'setWeight',
        'channelMethodCode' => 'setChannelMethodCode',
        'merchantShipmentNo' => 'setMerchantShipmentNo',
        'merchantOrderNo' => 'setMerchantOrderNo',
        'shippedFromCountryCode' => 'setShippedFromCountryCode',
        'shippedFromStockLocationId' => 'setShippedFromStockLocationId',
        'lines' => 'setLines'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'dimensions' => 'getDimensions',
        'weight' => 'getWeight',
        'channelMethodCode' => 'getChannelMethodCode',
        'merchantShipmentNo' => 'getMerchantShipmentNo',
        'merchantOrderNo' => 'getMerchantOrderNo',
        'shippedFromCountryCode' => 'getShippedFromCountryCode',
        'shippedFromStockLocationId' => 'getShippedFromStockLocationId',
        'lines' => 'getLines'
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
        $this->setIfExists('dimensions', $data ?? [], null);
        $this->setIfExists('weight', $data ?? [], null);
        $this->setIfExists('channelMethodCode', $data ?? [], null);
        $this->setIfExists('merchantShipmentNo', $data ?? [], null);
        $this->setIfExists('merchantOrderNo', $data ?? [], null);
        $this->setIfExists('shippedFromCountryCode', $data ?? [], null);
        $this->setIfExists('shippedFromStockLocationId', $data ?? [], null);
        $this->setIfExists('lines', $data ?? [], null);
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

        if ($this->container['dimensions'] === null) {
            $invalidProperties[] = "'dimensions' can't be null";
        }
        if ($this->container['weight'] === null) {
            $invalidProperties[] = "'weight' can't be null";
        }
        if ($this->container['channelMethodCode'] === null) {
            $invalidProperties[] = "'channelMethodCode' can't be null";
        }
        if ((mb_strlen($this->container['channelMethodCode']) < 1)) {
            $invalidProperties[] = "invalid value for 'channelMethodCode', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['merchantShipmentNo'] === null) {
            $invalidProperties[] = "'merchantShipmentNo' can't be null";
        }
        if ((mb_strlen($this->container['merchantShipmentNo']) > 250)) {
            $invalidProperties[] = "invalid value for 'merchantShipmentNo', the character length must be smaller than or equal to 250.";
        }

        if ((mb_strlen($this->container['merchantShipmentNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantShipmentNo', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['merchantOrderNo'] === null) {
            $invalidProperties[] = "'merchantOrderNo' can't be null";
        }
        if ((mb_strlen($this->container['merchantOrderNo']) > 50)) {
            $invalidProperties[] = "invalid value for 'merchantOrderNo', the character length must be smaller than or equal to 50.";
        }

        if ((mb_strlen($this->container['merchantOrderNo']) < 0)) {
            $invalidProperties[] = "invalid value for 'merchantOrderNo', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['shippedFromCountryCode']) && (mb_strlen($this->container['shippedFromCountryCode']) > 3)) {
            $invalidProperties[] = "invalid value for 'shippedFromCountryCode', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['shippedFromCountryCode']) && (mb_strlen($this->container['shippedFromCountryCode']) < 0)) {
            $invalidProperties[] = "invalid value for 'shippedFromCountryCode', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
        }
        if ((count($this->container['lines']) < 1)) {
            $invalidProperties[] = "invalid value for 'lines', number of items must be greater than or equal to 1.";
        }

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
     * Gets dimensions
     *
     * @return \FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentPackageDimensionsRequest
     */
    public function getDimensions()
    {
        return $this->container['dimensions'];
    }

    /**
     * Sets dimensions
     *
     * @param \FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentPackageDimensionsRequest $dimensions dimensions
     *
     * @return self
     */
    public function setDimensions($dimensions)
    {
        if (is_null($dimensions)) {
            throw new \InvalidArgumentException('non-nullable dimensions cannot be null');
        }
        $this->container['dimensions'] = $dimensions;

        return $this;
    }

    /**
     * Gets weight
     *
     * @return \FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentPackageWeightRequest
     */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
     * Sets weight
     *
     * @param \FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentPackageWeightRequest $weight weight
     *
     * @return self
     */
    public function setWeight($weight)
    {
        if (is_null($weight)) {
            throw new \InvalidArgumentException('non-nullable weight cannot be null');
        }
        $this->container['weight'] = $weight;

        return $this;
    }

    /**
     * Gets channelMethodCode
     *
     * @return string
     */
    public function getChannelMethodCode()
    {
        return $this->container['channelMethodCode'];
    }

    /**
     * Sets channelMethodCode
     *
     * @param string $channelMethodCode channelMethodCode
     *
     * @return self
     */
    public function setChannelMethodCode($channelMethodCode)
    {
        if (is_null($channelMethodCode)) {
            throw new \InvalidArgumentException('non-nullable channelMethodCode cannot be null');
        }

        if ((mb_strlen($channelMethodCode) < 1)) {
            throw new \InvalidArgumentException('invalid length for $channelMethodCode when calling MerchantChannelLabelShipmentRequest., must be bigger than or equal to 1.');
        }

        $this->container['channelMethodCode'] = $channelMethodCode;

        return $this;
    }

    /**
     * Gets merchantShipmentNo
     *
     * @return string
     */
    public function getMerchantShipmentNo()
    {
        return $this->container['merchantShipmentNo'];
    }

    /**
     * Sets merchantShipmentNo
     *
     * @param string $merchantShipmentNo The unique shipment reference used by the Merchant.
     *
     * @return self
     */
    public function setMerchantShipmentNo($merchantShipmentNo)
    {
        if (is_null($merchantShipmentNo)) {
            throw new \InvalidArgumentException('non-nullable merchantShipmentNo cannot be null');
        }
        if ((mb_strlen($merchantShipmentNo) > 250)) {
            throw new \InvalidArgumentException('invalid length for $merchantShipmentNo when calling MerchantChannelLabelShipmentRequest., must be smaller than or equal to 250.');
        }
        if ((mb_strlen($merchantShipmentNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantShipmentNo when calling MerchantChannelLabelShipmentRequest., must be bigger than or equal to 0.');
        }

        $this->container['merchantShipmentNo'] = $merchantShipmentNo;

        return $this;
    }

    /**
     * Gets merchantOrderNo
     *
     * @return string
     */
    public function getMerchantOrderNo()
    {
        return $this->container['merchantOrderNo'];
    }

    /**
     * Sets merchantOrderNo
     *
     * @param string $merchantOrderNo The unique order reference used by the Merchant.
     *
     * @return self
     */
    public function setMerchantOrderNo($merchantOrderNo)
    {
        if (is_null($merchantOrderNo)) {
            throw new \InvalidArgumentException('non-nullable merchantOrderNo cannot be null');
        }
        if ((mb_strlen($merchantOrderNo) > 50)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderNo when calling MerchantChannelLabelShipmentRequest., must be smaller than or equal to 50.');
        }
        if ((mb_strlen($merchantOrderNo) < 0)) {
            throw new \InvalidArgumentException('invalid length for $merchantOrderNo when calling MerchantChannelLabelShipmentRequest., must be bigger than or equal to 0.');
        }

        $this->container['merchantOrderNo'] = $merchantOrderNo;

        return $this;
    }

    /**
     * Gets shippedFromCountryCode
     *
     * @return string|null
     */
    public function getShippedFromCountryCode()
    {
        return $this->container['shippedFromCountryCode'];
    }

    /**
     * Sets shippedFromCountryCode
     *
     * @param string|null $shippedFromCountryCode The code of the country from where the package is being shipped.
     *
     * @return self
     */
    public function setShippedFromCountryCode($shippedFromCountryCode)
    {
        if (is_null($shippedFromCountryCode)) {
            array_push($this->openAPINullablesSetToNull, 'shippedFromCountryCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shippedFromCountryCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        if (!is_null($shippedFromCountryCode) && (mb_strlen($shippedFromCountryCode) > 3)) {
            throw new \InvalidArgumentException('invalid length for $shippedFromCountryCode when calling MerchantChannelLabelShipmentRequest., must be smaller than or equal to 3.');
        }
        if (!is_null($shippedFromCountryCode) && (mb_strlen($shippedFromCountryCode) < 0)) {
            throw new \InvalidArgumentException('invalid length for $shippedFromCountryCode when calling MerchantChannelLabelShipmentRequest., must be bigger than or equal to 0.');
        }

        $this->container['shippedFromCountryCode'] = $shippedFromCountryCode;

        return $this;
    }

    /**
     * Gets shippedFromStockLocationId
     *
     * @return int|null
     */
    public function getShippedFromStockLocationId()
    {
        return $this->container['shippedFromStockLocationId'];
    }

    /**
     * Sets shippedFromStockLocationId
     *
     * @param int|null $shippedFromStockLocationId shippedFromStockLocationId
     *
     * @return self
     */
    public function setShippedFromStockLocationId($shippedFromStockLocationId)
    {
        if (is_null($shippedFromStockLocationId)) {
            array_push($this->openAPINullablesSetToNull, 'shippedFromStockLocationId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shippedFromStockLocationId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shippedFromStockLocationId'] = $shippedFromStockLocationId;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentLineRequest[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentLineRequest[] $lines lines
     *
     * @return self
     */
    public function setLines($lines)
    {
        if (is_null($lines)) {
            throw new \InvalidArgumentException('non-nullable lines cannot be null');
        }


        if ((count($lines) < 1)) {
            throw new \InvalidArgumentException('invalid length for $lines when calling MerchantChannelLabelShipmentRequest., number of items must be greater than or equal to 1.');
        }
        $this->container['lines'] = $lines;

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


