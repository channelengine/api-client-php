<?php
/**
 * OrderFilter
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * ChannelEngine API V2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.4.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChannelEngine\ApiClient\Model;

use \ArrayAccess;
use \ChannelEngine\ApiClient\ObjectSerializer;

/**
 * OrderFilter Class Doc Comment
 *
 * @category Class
 * @package  ChannelEngine\ApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderFilter';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'statuses' => 'string[]',
        'merchantOrderNos' => 'string[]',
        'excludeMarketplaceFulfilledOrdersAndLines' => 'bool',
        'fulfillmentType' => 'string',
        'page' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'statuses' => null,
        'merchantOrderNos' => null,
        'excludeMarketplaceFulfilledOrdersAndLines' => null,
        'fulfillmentType' => null,
        'page' => 'int32'
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
        'statuses' => 'Statuses',
        'merchantOrderNos' => 'MerchantOrderNos',
        'excludeMarketplaceFulfilledOrdersAndLines' => 'ExcludeMarketplaceFulfilledOrdersAndLines',
        'fulfillmentType' => 'FulfillmentType',
        'page' => 'Page'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'statuses' => 'setStatuses',
        'merchantOrderNos' => 'setMerchantOrderNos',
        'excludeMarketplaceFulfilledOrdersAndLines' => 'setExcludeMarketplaceFulfilledOrdersAndLines',
        'fulfillmentType' => 'setFulfillmentType',
        'page' => 'setPage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'statuses' => 'getStatuses',
        'merchantOrderNos' => 'getMerchantOrderNos',
        'excludeMarketplaceFulfilledOrdersAndLines' => 'getExcludeMarketplaceFulfilledOrdersAndLines',
        'fulfillmentType' => 'getFulfillmentType',
        'page' => 'getPage'
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

    const STATUSES_IN_PROGRESS = 'IN_PROGRESS';
    const STATUSES_SHIPPED = 'SHIPPED';
    const STATUSES_IN_BACKORDER = 'IN_BACKORDER';
    const STATUSES_CANCELED = 'CANCELED';
    const STATUSES_MANCO = 'MANCO';
    const STATUSES_IN_COMBI = 'IN_COMBI';
    const STATUSES_CLOSED = 'CLOSED';
    const STATUSES__NEW = 'NEW';
    const STATUSES_RETURNED = 'RETURNED';
    const STATUSES_REQUIRES_CORRECTION = 'REQUIRES_CORRECTION';
    const FULFILLMENT_TYPE_ALL = 'ALL';
    const FULFILLMENT_TYPE_ONLY_MERCHANT = 'ONLY_MERCHANT';
    const FULFILLMENT_TYPE_ONLY_CHANNEL = 'ONLY_CHANNEL';
    const FULFILLMENT_TYPE_MIXED = 'MIXED';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusesAllowableValues()
    {
        return [
            self::STATUSES_IN_PROGRESS,
            self::STATUSES_SHIPPED,
            self::STATUSES_IN_BACKORDER,
            self::STATUSES_CANCELED,
            self::STATUSES_MANCO,
            self::STATUSES_IN_COMBI,
            self::STATUSES_CLOSED,
            self::STATUSES__NEW,
            self::STATUSES_RETURNED,
            self::STATUSES_REQUIRES_CORRECTION,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFulfillmentTypeAllowableValues()
    {
        return [
            self::FULFILLMENT_TYPE_ALL,
            self::FULFILLMENT_TYPE_ONLY_MERCHANT,
            self::FULFILLMENT_TYPE_ONLY_CHANNEL,
            self::FULFILLMENT_TYPE_MIXED,
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
        $this->container['statuses'] = isset($data['statuses']) ? $data['statuses'] : null;
        $this->container['merchantOrderNos'] = isset($data['merchantOrderNos']) ? $data['merchantOrderNos'] : null;
        $this->container['excludeMarketplaceFulfilledOrdersAndLines'] = isset($data['excludeMarketplaceFulfilledOrdersAndLines']) ? $data['excludeMarketplaceFulfilledOrdersAndLines'] : null;
        $this->container['fulfillmentType'] = isset($data['fulfillmentType']) ? $data['fulfillmentType'] : null;
        $this->container['page'] = isset($data['page']) ? $data['page'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getFulfillmentTypeAllowableValues();
        if (!in_array($this->container['fulfillmentType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'fulfillmentType', must be one of '%s'",
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

        $allowedValues = $this->getFulfillmentTypeAllowableValues();
        if (!in_array($this->container['fulfillmentType'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets statuses
     *
     * @return string[]
     */
    public function getStatuses()
    {
        return $this->container['statuses'];
    }

    /**
     * Sets statuses
     *
     * @param string[] $statuses statuses
     *
     * @return $this
     */
    public function setStatuses($statuses)
    {
        $allowedValues = $this->getStatusesAllowableValues();
        if (!is_null($statuses) && array_diff($statuses, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'statuses', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['statuses'] = $statuses;

        return $this;
    }

    /**
     * Gets merchantOrderNos
     *
     * @return string[]
     */
    public function getMerchantOrderNos()
    {
        return $this->container['merchantOrderNos'];
    }

    /**
     * Sets merchantOrderNos
     *
     * @param string[] $merchantOrderNos merchantOrderNos
     *
     * @return $this
     */
    public function setMerchantOrderNos($merchantOrderNos)
    {
        $this->container['merchantOrderNos'] = $merchantOrderNos;

        return $this;
    }

    /**
     * Gets excludeMarketplaceFulfilledOrdersAndLines
     *
     * @return bool
     */
    public function getExcludeMarketplaceFulfilledOrdersAndLines()
    {
        return $this->container['excludeMarketplaceFulfilledOrdersAndLines'];
    }

    /**
     * Sets excludeMarketplaceFulfilledOrdersAndLines
     *
     * @param bool $excludeMarketplaceFulfilledOrdersAndLines excludeMarketplaceFulfilledOrdersAndLines
     *
     * @return $this
     */
    public function setExcludeMarketplaceFulfilledOrdersAndLines($excludeMarketplaceFulfilledOrdersAndLines)
    {
        $this->container['excludeMarketplaceFulfilledOrdersAndLines'] = $excludeMarketplaceFulfilledOrdersAndLines;

        return $this;
    }

    /**
     * Gets fulfillmentType
     *
     * @return string
     */
    public function getFulfillmentType()
    {
        return $this->container['fulfillmentType'];
    }

    /**
     * Sets fulfillmentType
     *
     * @param string $fulfillmentType Filter orders on fulfillment type. This will include all orders lines, even if they are partially fulfilled by the marketplace.  To exclude orders and lines that are fulfilled by the marketplace from the response, set ExcludeMarketplaceFulfilledOrdersAndLines to true.
     *
     * @return $this
     */
    public function setFulfillmentType($fulfillmentType)
    {
        $allowedValues = $this->getFulfillmentTypeAllowableValues();
        if (!is_null($fulfillmentType) && !in_array($fulfillmentType, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'fulfillmentType', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['fulfillmentType'] = $fulfillmentType;

        return $this;
    }

    /**
     * Gets page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->container['page'];
    }

    /**
     * Sets page
     *
     * @param int $page page
     *
     * @return $this
     */
    public function setPage($page)
    {
        $this->container['page'] = $page;

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


