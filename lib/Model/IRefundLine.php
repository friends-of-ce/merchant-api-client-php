<?php
/**
 * IRefundLine
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
 * IRefundLine Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IRefundLine implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IRefundLine';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id' => 'int',
        'lineAmountInclTax' => 'float',
        'originalLineAmountInclTax' => 'float',
        'lineTotalInclTax' => 'float',
        'originalLineTotalInclTax' => 'float',
        'originalUnitTax' => 'float',
        'refundId' => 'int',
        'orderLineId' => 'int',
        'returnLineId' => 'int',
        'channelOrderLineNo' => 'string',
        'merchantRefundLineNo' => 'string',
        'createdAt' => '\DateTime',
        'updatedAt' => '\DateTime',
        'deletedAt' => '\DateTime'
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
        'lineAmountInclTax' => 'decimal',
        'originalLineAmountInclTax' => 'decimal',
        'lineTotalInclTax' => 'decimal',
        'originalLineTotalInclTax' => 'decimal',
        'originalUnitTax' => 'decimal',
        'refundId' => 'int32',
        'orderLineId' => 'int32',
        'returnLineId' => 'int32',
        'channelOrderLineNo' => null,
        'merchantRefundLineNo' => null,
        'createdAt' => 'date-time',
        'updatedAt' => 'date-time',
        'deletedAt' => 'date-time'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'id' => false,
        'lineAmountInclTax' => false,
        'originalLineAmountInclTax' => false,
        'lineTotalInclTax' => false,
        'originalLineTotalInclTax' => false,
        'originalUnitTax' => false,
        'refundId' => false,
        'orderLineId' => false,
        'returnLineId' => true,
        'channelOrderLineNo' => true,
        'merchantRefundLineNo' => true,
        'createdAt' => false,
        'updatedAt' => false,
        'deletedAt' => true
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
        'lineAmountInclTax' => 'LineAmountInclTax',
        'originalLineAmountInclTax' => 'OriginalLineAmountInclTax',
        'lineTotalInclTax' => 'LineTotalInclTax',
        'originalLineTotalInclTax' => 'OriginalLineTotalInclTax',
        'originalUnitTax' => 'OriginalUnitTax',
        'refundId' => 'RefundId',
        'orderLineId' => 'OrderLineId',
        'returnLineId' => 'ReturnLineId',
        'channelOrderLineNo' => 'ChannelOrderLineNo',
        'merchantRefundLineNo' => 'MerchantRefundLineNo',
        'createdAt' => 'CreatedAt',
        'updatedAt' => 'UpdatedAt',
        'deletedAt' => 'DeletedAt'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'lineAmountInclTax' => 'setLineAmountInclTax',
        'originalLineAmountInclTax' => 'setOriginalLineAmountInclTax',
        'lineTotalInclTax' => 'setLineTotalInclTax',
        'originalLineTotalInclTax' => 'setOriginalLineTotalInclTax',
        'originalUnitTax' => 'setOriginalUnitTax',
        'refundId' => 'setRefundId',
        'orderLineId' => 'setOrderLineId',
        'returnLineId' => 'setReturnLineId',
        'channelOrderLineNo' => 'setChannelOrderLineNo',
        'merchantRefundLineNo' => 'setMerchantRefundLineNo',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'deletedAt' => 'setDeletedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'lineAmountInclTax' => 'getLineAmountInclTax',
        'originalLineAmountInclTax' => 'getOriginalLineAmountInclTax',
        'lineTotalInclTax' => 'getLineTotalInclTax',
        'originalLineTotalInclTax' => 'getOriginalLineTotalInclTax',
        'originalUnitTax' => 'getOriginalUnitTax',
        'refundId' => 'getRefundId',
        'orderLineId' => 'getOrderLineId',
        'returnLineId' => 'getReturnLineId',
        'channelOrderLineNo' => 'getChannelOrderLineNo',
        'merchantRefundLineNo' => 'getMerchantRefundLineNo',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'deletedAt' => 'getDeletedAt'
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
        $this->setIfExists('lineAmountInclTax', $data ?? [], null);
        $this->setIfExists('originalLineAmountInclTax', $data ?? [], null);
        $this->setIfExists('lineTotalInclTax', $data ?? [], null);
        $this->setIfExists('originalLineTotalInclTax', $data ?? [], null);
        $this->setIfExists('originalUnitTax', $data ?? [], null);
        $this->setIfExists('refundId', $data ?? [], null);
        $this->setIfExists('orderLineId', $data ?? [], null);
        $this->setIfExists('returnLineId', $data ?? [], null);
        $this->setIfExists('channelOrderLineNo', $data ?? [], null);
        $this->setIfExists('merchantRefundLineNo', $data ?? [], null);
        $this->setIfExists('createdAt', $data ?? [], null);
        $this->setIfExists('updatedAt', $data ?? [], null);
        $this->setIfExists('deletedAt', $data ?? [], null);
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
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets lineAmountInclTax
     *
     * @return float|null
     */
    public function getLineAmountInclTax()
    {
        return $this->container['lineAmountInclTax'];
    }

    /**
     * Sets lineAmountInclTax
     *
     * @param float|null $lineAmountInclTax lineAmountInclTax
     *
     * @return self
     */
    public function setLineAmountInclTax($lineAmountInclTax)
    {
        if (is_null($lineAmountInclTax)) {
            throw new \InvalidArgumentException('non-nullable lineAmountInclTax cannot be null');
        }
        $this->container['lineAmountInclTax'] = $lineAmountInclTax;

        return $this;
    }

    /**
     * Gets originalLineAmountInclTax
     *
     * @return float|null
     */
    public function getOriginalLineAmountInclTax()
    {
        return $this->container['originalLineAmountInclTax'];
    }

    /**
     * Sets originalLineAmountInclTax
     *
     * @param float|null $originalLineAmountInclTax originalLineAmountInclTax
     *
     * @return self
     */
    public function setOriginalLineAmountInclTax($originalLineAmountInclTax)
    {
        if (is_null($originalLineAmountInclTax)) {
            throw new \InvalidArgumentException('non-nullable originalLineAmountInclTax cannot be null');
        }
        $this->container['originalLineAmountInclTax'] = $originalLineAmountInclTax;

        return $this;
    }

    /**
     * Gets lineTotalInclTax
     *
     * @return float|null
     */
    public function getLineTotalInclTax()
    {
        return $this->container['lineTotalInclTax'];
    }

    /**
     * Sets lineTotalInclTax
     *
     * @param float|null $lineTotalInclTax lineTotalInclTax
     *
     * @return self
     */
    public function setLineTotalInclTax($lineTotalInclTax)
    {
        if (is_null($lineTotalInclTax)) {
            throw new \InvalidArgumentException('non-nullable lineTotalInclTax cannot be null');
        }
        $this->container['lineTotalInclTax'] = $lineTotalInclTax;

        return $this;
    }

    /**
     * Gets originalLineTotalInclTax
     *
     * @return float|null
     */
    public function getOriginalLineTotalInclTax()
    {
        return $this->container['originalLineTotalInclTax'];
    }

    /**
     * Sets originalLineTotalInclTax
     *
     * @param float|null $originalLineTotalInclTax originalLineTotalInclTax
     *
     * @return self
     */
    public function setOriginalLineTotalInclTax($originalLineTotalInclTax)
    {
        if (is_null($originalLineTotalInclTax)) {
            throw new \InvalidArgumentException('non-nullable originalLineTotalInclTax cannot be null');
        }
        $this->container['originalLineTotalInclTax'] = $originalLineTotalInclTax;

        return $this;
    }

    /**
     * Gets originalUnitTax
     *
     * @return float|null
     */
    public function getOriginalUnitTax()
    {
        return $this->container['originalUnitTax'];
    }

    /**
     * Sets originalUnitTax
     *
     * @param float|null $originalUnitTax originalUnitTax
     *
     * @return self
     */
    public function setOriginalUnitTax($originalUnitTax)
    {
        if (is_null($originalUnitTax)) {
            throw new \InvalidArgumentException('non-nullable originalUnitTax cannot be null');
        }
        $this->container['originalUnitTax'] = $originalUnitTax;

        return $this;
    }

    /**
     * Gets refundId
     *
     * @return int|null
     */
    public function getRefundId()
    {
        return $this->container['refundId'];
    }

    /**
     * Sets refundId
     *
     * @param int|null $refundId refundId
     *
     * @return self
     */
    public function setRefundId($refundId)
    {
        if (is_null($refundId)) {
            throw new \InvalidArgumentException('non-nullable refundId cannot be null');
        }
        $this->container['refundId'] = $refundId;

        return $this;
    }

    /**
     * Gets orderLineId
     *
     * @return int|null
     */
    public function getOrderLineId()
    {
        return $this->container['orderLineId'];
    }

    /**
     * Sets orderLineId
     *
     * @param int|null $orderLineId orderLineId
     *
     * @return self
     */
    public function setOrderLineId($orderLineId)
    {
        if (is_null($orderLineId)) {
            throw new \InvalidArgumentException('non-nullable orderLineId cannot be null');
        }
        $this->container['orderLineId'] = $orderLineId;

        return $this;
    }

    /**
     * Gets returnLineId
     *
     * @return int|null
     */
    public function getReturnLineId()
    {
        return $this->container['returnLineId'];
    }

    /**
     * Sets returnLineId
     *
     * @param int|null $returnLineId returnLineId
     *
     * @return self
     */
    public function setReturnLineId($returnLineId)
    {
        if (is_null($returnLineId)) {
            array_push($this->openAPINullablesSetToNull, 'returnLineId');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('returnLineId', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['returnLineId'] = $returnLineId;

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
     * Gets merchantRefundLineNo
     *
     * @return string|null
     */
    public function getMerchantRefundLineNo()
    {
        return $this->container['merchantRefundLineNo'];
    }

    /**
     * Sets merchantRefundLineNo
     *
     * @param string|null $merchantRefundLineNo merchantRefundLineNo
     *
     * @return self
     */
    public function setMerchantRefundLineNo($merchantRefundLineNo)
    {
        if (is_null($merchantRefundLineNo)) {
            array_push($this->openAPINullablesSetToNull, 'merchantRefundLineNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchantRefundLineNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchantRefundLineNo'] = $merchantRefundLineNo;

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
            throw new \InvalidArgumentException('non-nullable updatedAt cannot be null');
        }
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets deletedAt
     *
     * @return \DateTime|null
     */
    public function getDeletedAt()
    {
        return $this->container['deletedAt'];
    }

    /**
     * Sets deletedAt
     *
     * @param \DateTime|null $deletedAt deletedAt
     *
     * @return self
     */
    public function setDeletedAt($deletedAt)
    {
        if (is_null($deletedAt)) {
            array_push($this->openAPINullablesSetToNull, 'deletedAt');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('deletedAt', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['deletedAt'] = $deletedAt;

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


