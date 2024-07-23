<?php
/**
 * IPurchaseOrderLineByFilter
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

use \ArrayAccess;
use \FriendsOfCE\Merchant\ApiClient\ObjectSerializer;

/**
 * IPurchaseOrderLineByFilter Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IPurchaseOrderLineByFilter implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IPurchaseOrderLineByFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'channelOrderLineNo' => 'string',
        'channelProductNo' => 'string',
        'merchantProductNo' => 'string',
        'quantity' => 'int',
        'isBackOrderAllowed' => 'bool',
        'unitOfMeasure' => '\FriendsOfCE\Merchant\ApiClient\Model\PurchaseOrderLineUnitOfMeasure',
        'unitSize' => 'int',
        'netCostAmount' => 'float',
        'netCostCurrency' => 'string',
        'listPriceAmount' => 'float',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'acknowledgedDate' => '\DateTime',
        'lineTotal' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'channelOrderLineNo' => null,
        'channelProductNo' => null,
        'merchantProductNo' => null,
        'quantity' => 'int32',
        'isBackOrderAllowed' => null,
        'unitOfMeasure' => null,
        'unitSize' => 'int32',
        'netCostAmount' => 'decimal',
        'netCostCurrency' => null,
        'listPriceAmount' => 'decimal',
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'acknowledgedDate' => 'date-time',
        'lineTotal' => 'decimal'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => true,
        'channelOrderLineNo' => true,
        'channelProductNo' => true,
        'merchantProductNo' => true,
        'quantity' => false,
        'isBackOrderAllowed' => false,
        'unitOfMeasure' => false,
        'unitSize' => true,
        'netCostAmount' => true,
        'netCostCurrency' => true,
        'listPriceAmount' => true,
        'createdAt' => false,
        'updatedAt' => true,
        'acknowledgedDate' => true,
        'lineTotal' => true
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
        'id' => 'Id',
        'channelOrderLineNo' => 'ChannelOrderLineNo',
        'channelProductNo' => 'ChannelProductNo',
        'merchantProductNo' => 'MerchantProductNo',
        'quantity' => 'Quantity',
        'isBackOrderAllowed' => 'IsBackOrderAllowed',
        'unitOfMeasure' => 'UnitOfMeasure',
        'unitSize' => 'UnitSize',
        'netCostAmount' => 'NetCostAmount',
        'netCostCurrency' => 'NetCostCurrency',
        'listPriceAmount' => 'ListPriceAmount',
        'createdAt' => 'CreatedAt',
        'updatedAt' => 'UpdatedAt',
        'acknowledgedDate' => 'AcknowledgedDate',
        'lineTotal' => 'LineTotal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'channelOrderLineNo' => 'setChannelOrderLineNo',
        'channelProductNo' => 'setChannelProductNo',
        'merchantProductNo' => 'setMerchantProductNo',
        'quantity' => 'setQuantity',
        'isBackOrderAllowed' => 'setIsBackOrderAllowed',
        'unitOfMeasure' => 'setUnitOfMeasure',
        'unitSize' => 'setUnitSize',
        'netCostAmount' => 'setNetCostAmount',
        'netCostCurrency' => 'setNetCostCurrency',
        'listPriceAmount' => 'setListPriceAmount',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'acknowledgedDate' => 'setAcknowledgedDate',
        'lineTotal' => 'setLineTotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'channelOrderLineNo' => 'getChannelOrderLineNo',
        'channelProductNo' => 'getChannelProductNo',
        'merchantProductNo' => 'getMerchantProductNo',
        'quantity' => 'getQuantity',
        'isBackOrderAllowed' => 'getIsBackOrderAllowed',
        'unitOfMeasure' => 'getUnitOfMeasure',
        'unitSize' => 'getUnitSize',
        'netCostAmount' => 'getNetCostAmount',
        'netCostCurrency' => 'getNetCostCurrency',
        'listPriceAmount' => 'getListPriceAmount',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'acknowledgedDate' => 'getAcknowledgedDate',
        'lineTotal' => 'getLineTotal'
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
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('channelOrderLineNo', $data ?? [], null);
        $this->setIfExists('channelProductNo', $data ?? [], null);
        $this->setIfExists('merchantProductNo', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
        $this->setIfExists('isBackOrderAllowed', $data ?? [], null);
        $this->setIfExists('unitOfMeasure', $data ?? [], null);
        $this->setIfExists('unitSize', $data ?? [], null);
        $this->setIfExists('netCostAmount', $data ?? [], null);
        $this->setIfExists('netCostCurrency', $data ?? [], null);
        $this->setIfExists('listPriceAmount', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('acknowledgedDate', $data ?? [], null);
        $this->setIfExists('lineTotal', $data ?? [], null);
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
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            array_push($this->openAPINullablesSetToNull, 'id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets channelOrderLineNo
     *
     * @return string|null
     */
    public function getChannelOrderLineNo()
    {
        return $this->container['channelOrderLineNo'];
    }

    /**
     * Sets channelOrderLineNo
     *
     * @param string|null $channelOrderLineNo channelOrderLineNo
     *
     * @return self
     */
    public function setChannelOrderLineNo($channelOrderLineNo)
    {
        if (is_null($channelOrderLineNo)) {
            array_push($this->openAPINullablesSetToNull, 'channelOrderLineNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channelOrderLineNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channelOrderLineNo'] = $channelOrderLineNo;

        return $this;
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
     * @param string|null $channelProductNo channelProductNo
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
     * @param string|null $merchantProductNo merchantProductNo
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
     * Gets quantity
     *
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int|null $quantity quantity
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets isBackOrderAllowed
     *
     * @return bool|null
     */
    public function getIsBackOrderAllowed()
    {
        return $this->container['isBackOrderAllowed'];
    }

    /**
     * Sets isBackOrderAllowed
     *
     * @param bool|null $isBackOrderAllowed isBackOrderAllowed
     *
     * @return self
     */
    public function setIsBackOrderAllowed($isBackOrderAllowed)
    {
        if (is_null($isBackOrderAllowed)) {
            throw new \InvalidArgumentException('non-nullable isBackOrderAllowed cannot be null');
        }
        $this->container['isBackOrderAllowed'] = $isBackOrderAllowed;

        return $this;
    }

    /**
     * Gets unitOfMeasure
     *
     * @return \FriendsOfCE\Merchant\ApiClient\Model\PurchaseOrderLineUnitOfMeasure|null
     */
    public function getUnitOfMeasure()
    {
        return $this->container['unitOfMeasure'];
    }

    /**
     * Sets unitOfMeasure
     *
     * @param \FriendsOfCE\Merchant\ApiClient\Model\PurchaseOrderLineUnitOfMeasure|null $unitOfMeasure unitOfMeasure
     *
     * @return self
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        if (is_null($unitOfMeasure)) {
            throw new \InvalidArgumentException('non-nullable unitOfMeasure cannot be null');
        }
        $this->container['unitOfMeasure'] = $unitOfMeasure;

        return $this;
    }

    /**
     * Gets unitSize
     *
     * @return int|null
     */
    public function getUnitSize()
    {
        return $this->container['unitSize'];
    }

    /**
     * Sets unitSize
     *
     * @param int|null $unitSize unitSize
     *
     * @return self
     */
    public function setUnitSize($unitSize)
    {
        if (is_null($unitSize)) {
            array_push($this->openAPINullablesSetToNull, 'unitSize');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('unitSize', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['unitSize'] = $unitSize;

        return $this;
    }

    /**
     * Gets netCostAmount
     *
     * @return float|null
     */
    public function getNetCostAmount()
    {
        return $this->container['netCostAmount'];
    }

    /**
     * Sets netCostAmount
     *
     * @param float|null $netCostAmount netCostAmount
     *
     * @return self
     */
    public function setNetCostAmount($netCostAmount)
    {
        if (is_null($netCostAmount)) {
            array_push($this->openAPINullablesSetToNull, 'netCostAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('netCostAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['netCostAmount'] = $netCostAmount;

        return $this;
    }

    /**
     * Gets netCostCurrency
     *
     * @return string|null
     */
    public function getNetCostCurrency()
    {
        return $this->container['netCostCurrency'];
    }

    /**
     * Sets netCostCurrency
     *
     * @param string|null $netCostCurrency netCostCurrency
     *
     * @return self
     */
    public function setNetCostCurrency($netCostCurrency)
    {
        if (is_null($netCostCurrency)) {
            array_push($this->openAPINullablesSetToNull, 'netCostCurrency');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('netCostCurrency', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['netCostCurrency'] = $netCostCurrency;

        return $this;
    }

    /**
     * Gets listPriceAmount
     *
     * @return float|null
     */
    public function getListPriceAmount()
    {
        return $this->container['listPriceAmount'];
    }

    /**
     * Sets listPriceAmount
     *
     * @param float|null $listPriceAmount listPriceAmount
     *
     * @return self
     */
    public function setListPriceAmount($listPriceAmount)
    {
        if (is_null($listPriceAmount)) {
            array_push($this->openAPINullablesSetToNull, 'listPriceAmount');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('listPriceAmount', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['listPriceAmount'] = $listPriceAmount;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime|null $createdAt createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt)
    {
        if (is_null($createdAt)) {
            throw new \InvalidArgumentException('non-nullable createdAt cannot be null');
        }
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param \DateTime|null $updatedAt updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt)
    {
        if (is_null($updatedAt)) {
            array_push($this->openAPINullablesSetToNull, 'updatedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('updatedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets acknowledgedDate
     *
     * @return \DateTime|null
     */
    public function getAcknowledgedDate()
    {
        return $this->container['acknowledgedDate'];
    }

    /**
     * Sets acknowledgedDate
     *
     * @param \DateTime|null $acknowledgedDate acknowledgedDate
     *
     * @return self
     */
    public function setAcknowledgedDate($acknowledgedDate)
    {
        if (is_null($acknowledgedDate)) {
            array_push($this->openAPINullablesSetToNull, 'acknowledgedDate');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('acknowledgedDate', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['acknowledgedDate'] = $acknowledgedDate;

        return $this;
    }

    /**
     * Gets lineTotal
     *
     * @return float|null
     */
    public function getLineTotal()
    {
        return $this->container['lineTotal'];
    }

    /**
     * Sets lineTotal
     *
     * @param float|null $lineTotal lineTotal
     *
     * @return self
     */
    public function setLineTotal($lineTotal)
    {
        if (is_null($lineTotal)) {
            array_push($this->openAPINullablesSetToNull, 'lineTotal');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('lineTotal', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['lineTotal'] = $lineTotal;

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


