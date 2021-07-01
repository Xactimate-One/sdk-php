<?php
/**
 * GenericPrimaryCoverageV1Response
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xactimate One API
 *
 * The Xactimate One API allows you to integrate your current services and applications directly with Xactimate One. It creates a seamless experience for your company as it manages claims with your internal software by sending and receiving data from the Xactimate One platform.
 *
 * The version of the OpenAPI document: null
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * GenericPrimaryCoverageV1Response Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GenericPrimaryCoverageV1Response extends GenericCoverageOrSublimit
{
    public const DISCRIMINATOR = 'type';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GenericPrimaryCoverageV1Response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'apply_depreciation' => 'bool',
        'deductible' => '\OpenAPI\Client\Model\DeductibleV1Response',
        'depreciation_is_recoverable' => 'bool',
        'reserve' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'apply_depreciation' => null,
        'deductible' => null,
        'depreciation_is_recoverable' => null,
        'reserve' => 'double'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'apply_depreciation' => 'applyDepreciation',
        'deductible' => 'deductible',
        'depreciation_is_recoverable' => 'depreciationIsRecoverable',
        'reserve' => 'reserve'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apply_depreciation' => 'setApplyDepreciation',
        'deductible' => 'setDeductible',
        'depreciation_is_recoverable' => 'setDepreciationIsRecoverable',
        'reserve' => 'setReserve'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apply_depreciation' => 'getApplyDepreciation',
        'deductible' => 'getDeductible',
        'depreciation_is_recoverable' => 'getDepreciationIsRecoverable',
        'reserve' => 'getReserve'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['apply_depreciation'] = $data['apply_depreciation'] ?? null;
        $this->container['deductible'] = $data['deductible'] ?? null;
        $this->container['depreciation_is_recoverable'] = $data['depreciation_is_recoverable'] ?? null;
        $this->container['reserve'] = $data['reserve'] ?? null;

        // Initialize discriminator property with the model name.
        $this->container['type'] = static::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['apply_depreciation'] === null) {
            $invalidProperties[] = "'apply_depreciation' can't be null";
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
     * Gets apply_depreciation
     *
     * @return bool
     */
    public function getApplyDepreciation()
    {
        return $this->container['apply_depreciation'];
    }

    /**
     * Sets apply_depreciation
     *
     * @param bool $apply_depreciation Does coverage apply depreciation
     *
     * @return self
     */
    public function setApplyDepreciation($apply_depreciation)
    {
        $this->container['apply_depreciation'] = $apply_depreciation;

        return $this;
    }

    /**
     * Gets deductible
     *
     * @return \OpenAPI\Client\Model\DeductibleV1Response|null
     */
    public function getDeductible()
    {
        return $this->container['deductible'];
    }

    /**
     * Sets deductible
     *
     * @param \OpenAPI\Client\Model\DeductibleV1Response|null $deductible deductible
     *
     * @return self
     */
    public function setDeductible($deductible)
    {
        $this->container['deductible'] = $deductible;

        return $this;
    }

    /**
     * Gets depreciation_is_recoverable
     *
     * @return bool|null
     */
    public function getDepreciationIsRecoverable()
    {
        return $this->container['depreciation_is_recoverable'];
    }

    /**
     * Sets depreciation_is_recoverable
     *
     * @param bool|null $depreciation_is_recoverable Is depreciation recoverable
     *
     * @return self
     */
    public function setDepreciationIsRecoverable($depreciation_is_recoverable)
    {
        $this->container['depreciation_is_recoverable'] = $depreciation_is_recoverable;

        return $this;
    }

    /**
     * Gets reserve
     *
     * @return double|null
     */
    public function getReserve()
    {
        return $this->container['reserve'];
    }

    /**
     * Sets reserve
     *
     * @param double|null $reserve The reserve
     *
     * @return self
     */
    public function setReserve($reserve)
    {
        $this->container['reserve'] = $reserve;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


