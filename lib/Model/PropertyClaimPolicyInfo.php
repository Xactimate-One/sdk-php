<?php
/**
 * PropertyClaimPolicyInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Xactimate One Customer Api
 *
 * The client claims API provides an integration point for Xactimate clients to create and manage insurance claims within the Xactimate One system.
 *
 * OpenAPI spec version: 0.1.3
 * Contact: contact@xactware.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * PropertyClaimPolicyInfo Class Doc Comment
 *
 * @category Class
 * @description Information about the claimant&#39;s policy
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PropertyClaimPolicyInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'PropertyClaimPolicyInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'policy_holder' => '\Swagger\Client\Model\PropertyClaimPolicyInfoPolicyHolder',
        'policy_type' => 'string',
        'policy_number' => 'string',
        'inception_date' => '\DateTime',
        'effective_date' => '\DateTime',
        'expiration_date' => '\DateTime',
        'mortgagee' => 'string',
        'loan_number' => 'string',
        'apply_deductible_to' => 'string',
        'apply_limits' => 'bool',
        'deductible' => 'float',
        'coverages' => '\Swagger\Client\Model\PropertyClaimPolicyInfoCoverages[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'policy_holder' => null,
        'policy_type' => null,
        'policy_number' => null,
        'inception_date' => 'date-time',
        'effective_date' => 'date-time',
        'expiration_date' => 'date-time',
        'mortgagee' => null,
        'loan_number' => null,
        'apply_deductible_to' => null,
        'apply_limits' => null,
        'deductible' => 'currency',
        'coverages' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'policy_holder' => 'policyHolder',
        'policy_type' => 'policyType',
        'policy_number' => 'policyNumber',
        'inception_date' => 'inceptionDate',
        'effective_date' => 'effectiveDate',
        'expiration_date' => 'expirationDate',
        'mortgagee' => 'mortgagee',
        'loan_number' => 'loanNumber',
        'apply_deductible_to' => 'applyDeductibleTo',
        'apply_limits' => 'applyLimits',
        'deductible' => 'deductible',
        'coverages' => 'coverages'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'policy_holder' => 'setPolicyHolder',
        'policy_type' => 'setPolicyType',
        'policy_number' => 'setPolicyNumber',
        'inception_date' => 'setInceptionDate',
        'effective_date' => 'setEffectiveDate',
        'expiration_date' => 'setExpirationDate',
        'mortgagee' => 'setMortgagee',
        'loan_number' => 'setLoanNumber',
        'apply_deductible_to' => 'setApplyDeductibleTo',
        'apply_limits' => 'setApplyLimits',
        'deductible' => 'setDeductible',
        'coverages' => 'setCoverages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'policy_holder' => 'getPolicyHolder',
        'policy_type' => 'getPolicyType',
        'policy_number' => 'getPolicyNumber',
        'inception_date' => 'getInceptionDate',
        'effective_date' => 'getEffectiveDate',
        'expiration_date' => 'getExpirationDate',
        'mortgagee' => 'getMortgagee',
        'loan_number' => 'getLoanNumber',
        'apply_deductible_to' => 'getApplyDeductibleTo',
        'apply_limits' => 'getApplyLimits',
        'deductible' => 'getDeductible',
        'coverages' => 'getCoverages'
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
        return self::$swaggerModelName;
    }

    const POLICY_TYPE_RESIDENTIAL = 'Residential';
    const APPLY_DEDUCTIBLE_TO_ACROSS_ALL_COVERAGES = 'AcrossAllCoverages';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPolicyTypeAllowableValues()
    {
        return [
            self::POLICY_TYPE_RESIDENTIAL,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getApplyDeductibleToAllowableValues()
    {
        return [
            self::APPLY_DEDUCTIBLE_TO_ACROSS_ALL_COVERAGES,
        ];
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
        $this->container['policy_holder'] = isset($data['policy_holder']) ? $data['policy_holder'] : null;
        $this->container['policy_type'] = isset($data['policy_type']) ? $data['policy_type'] : null;
        $this->container['policy_number'] = isset($data['policy_number']) ? $data['policy_number'] : null;
        $this->container['inception_date'] = isset($data['inception_date']) ? $data['inception_date'] : null;
        $this->container['effective_date'] = isset($data['effective_date']) ? $data['effective_date'] : null;
        $this->container['expiration_date'] = isset($data['expiration_date']) ? $data['expiration_date'] : null;
        $this->container['mortgagee'] = isset($data['mortgagee']) ? $data['mortgagee'] : null;
        $this->container['loan_number'] = isset($data['loan_number']) ? $data['loan_number'] : null;
        $this->container['apply_deductible_to'] = isset($data['apply_deductible_to']) ? $data['apply_deductible_to'] : null;
        $this->container['apply_limits'] = isset($data['apply_limits']) ? $data['apply_limits'] : null;
        $this->container['deductible'] = isset($data['deductible']) ? $data['deductible'] : null;
        $this->container['coverages'] = isset($data['coverages']) ? $data['coverages'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getPolicyTypeAllowableValues();
        if (!is_null($this->container['policy_type']) && !in_array($this->container['policy_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'policy_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getApplyDeductibleToAllowableValues();
        if (!is_null($this->container['apply_deductible_to']) && !in_array($this->container['apply_deductible_to'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'apply_deductible_to', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets policy_holder
     *
     * @return \Swagger\Client\Model\PropertyClaimPolicyInfoPolicyHolder
     */
    public function getPolicyHolder()
    {
        return $this->container['policy_holder'];
    }

    /**
     * Sets policy_holder
     *
     * @param \Swagger\Client\Model\PropertyClaimPolicyInfoPolicyHolder $policy_holder policy_holder
     *
     * @return $this
     */
    public function setPolicyHolder($policy_holder)
    {
        $this->container['policy_holder'] = $policy_holder;

        return $this;
    }

    /**
     * Gets policy_type
     *
     * @return string
     */
    public function getPolicyType()
    {
        return $this->container['policy_type'];
    }

    /**
     * Sets policy_type
     *
     * @param string $policy_type The type of the insurance policy
     *
     * @return $this
     */
    public function setPolicyType($policy_type)
    {
        $allowedValues = $this->getPolicyTypeAllowableValues();
        if (!is_null($policy_type) && !in_array($policy_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'policy_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['policy_type'] = $policy_type;

        return $this;
    }

    /**
     * Gets policy_number
     *
     * @return string
     */
    public function getPolicyNumber()
    {
        return $this->container['policy_number'];
    }

    /**
     * Sets policy_number
     *
     * @param string $policy_number The insurance policy number
     *
     * @return $this
     */
    public function setPolicyNumber($policy_number)
    {
        $this->container['policy_number'] = $policy_number;

        return $this;
    }

    /**
     * Gets inception_date
     *
     * @return \DateTime
     */
    public function getInceptionDate()
    {
        return $this->container['inception_date'];
    }

    /**
     * Sets inception_date
     *
     * @param \DateTime $inception_date The origination date of the insurance policy
     *
     * @return $this
     */
    public function setInceptionDate($inception_date)
    {
        $this->container['inception_date'] = $inception_date;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return \DateTime
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param \DateTime $effective_date The date the policy goes into effect
     *
     * @return $this
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime $expiration_date The date the policy expires
     *
     * @return $this
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets mortgagee
     *
     * @return string
     */
    public function getMortgagee()
    {
        return $this->container['mortgagee'];
    }

    /**
     * Sets mortgagee
     *
     * @param string $mortgagee The name of the mortgage holder
     *
     * @return $this
     */
    public function setMortgagee($mortgagee)
    {
        $this->container['mortgagee'] = $mortgagee;

        return $this;
    }

    /**
     * Gets loan_number
     *
     * @return string
     */
    public function getLoanNumber()
    {
        return $this->container['loan_number'];
    }

    /**
     * Sets loan_number
     *
     * @param string $loan_number The loan number of the mortgage
     *
     * @return $this
     */
    public function setLoanNumber($loan_number)
    {
        $this->container['loan_number'] = $loan_number;

        return $this;
    }

    /**
     * Gets apply_deductible_to
     *
     * @return string
     */
    public function getApplyDeductibleTo()
    {
        return $this->container['apply_deductible_to'];
    }

    /**
     * Sets apply_deductible_to
     *
     * @param string $apply_deductible_to Determines how the deductible values are handled
     *
     * @return $this
     */
    public function setApplyDeductibleTo($apply_deductible_to)
    {
        $allowedValues = $this->getApplyDeductibleToAllowableValues();
        if (!is_null($apply_deductible_to) && !in_array($apply_deductible_to, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'apply_deductible_to', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['apply_deductible_to'] = $apply_deductible_to;

        return $this;
    }

    /**
     * Gets apply_limits
     *
     * @return bool
     */
    public function getApplyLimits()
    {
        return $this->container['apply_limits'];
    }

    /**
     * Sets apply_limits
     *
     * @param bool $apply_limits Determines if policy limits should be applied
     *
     * @return $this
     */
    public function setApplyLimits($apply_limits)
    {
        $this->container['apply_limits'] = $apply_limits;

        return $this;
    }

    /**
     * Gets deductible
     *
     * @return float
     */
    public function getDeductible()
    {
        return $this->container['deductible'];
    }

    /**
     * Sets deductible
     *
     * @param float $deductible The policy holder's financial liability under this policy
     *
     * @return $this
     */
    public function setDeductible($deductible)
    {
        $this->container['deductible'] = $deductible;

        return $this;
    }

    /**
     * Gets coverages
     *
     * @return \Swagger\Client\Model\PropertyClaimPolicyInfoCoverages[]
     */
    public function getCoverages()
    {
        return $this->container['coverages'];
    }

    /**
     * Sets coverages
     *
     * @param \Swagger\Client\Model\PropertyClaimPolicyInfoCoverages[] $coverages The coverages provided in the policy
     *
     * @return $this
     */
    public function setCoverages($coverages)
    {
        $this->container['coverages'] = $coverages;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


