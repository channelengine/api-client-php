<?php
/**
 * ReturnLineViewModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
/**
 * ReturnLineViewModel Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReturnLineViewModel implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'order_line_reference' => 'string',
        'quantity' => 'int',
        'accepted_quantity' => 'int',
        'rejected_quantity' => 'int',
        'refund_incl_vat' => 'double',
        'refund_excl_vat' => 'double',
        'manual_refund_incl_vat' => 'double',
        'manual_refund_excl_vat' => 'double'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'order_line_reference' => 'OrderLineReference',
        'quantity' => 'Quantity',
        'accepted_quantity' => 'AcceptedQuantity',
        'rejected_quantity' => 'RejectedQuantity',
        'refund_incl_vat' => 'RefundInclVat',
        'refund_excl_vat' => 'RefundExclVat',
        'manual_refund_incl_vat' => 'ManualRefundInclVat',
        'manual_refund_excl_vat' => 'ManualRefundExclVat'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'order_line_reference' => 'setOrderLineReference',
        'quantity' => 'setQuantity',
        'accepted_quantity' => 'setAcceptedQuantity',
        'rejected_quantity' => 'setRejectedQuantity',
        'refund_incl_vat' => 'setRefundInclVat',
        'refund_excl_vat' => 'setRefundExclVat',
        'manual_refund_incl_vat' => 'setManualRefundInclVat',
        'manual_refund_excl_vat' => 'setManualRefundExclVat'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'order_line_reference' => 'getOrderLineReference',
        'quantity' => 'getQuantity',
        'accepted_quantity' => 'getAcceptedQuantity',
        'rejected_quantity' => 'getRejectedQuantity',
        'refund_incl_vat' => 'getRefundInclVat',
        'refund_excl_vat' => 'getRefundExclVat',
        'manual_refund_incl_vat' => 'getManualRefundInclVat',
        'manual_refund_excl_vat' => 'getManualRefundExclVat'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $order_line_reference 
      * @var string
      */
    protected $order_line_reference;
    
    /**
      * $quantity 
      * @var int
      */
    protected $quantity;
    
    /**
      * $accepted_quantity 
      * @var int
      */
    protected $accepted_quantity;
    
    /**
      * $rejected_quantity 
      * @var int
      */
    protected $rejected_quantity;
    
    /**
      * $refund_incl_vat 
      * @var double
      */
    protected $refund_incl_vat;
    
    /**
      * $refund_excl_vat 
      * @var double
      */
    protected $refund_excl_vat;
    
    /**
      * $manual_refund_incl_vat 
      * @var double
      */
    protected $manual_refund_incl_vat;
    
    /**
      * $manual_refund_excl_vat 
      * @var double
      */
    protected $manual_refund_excl_vat;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->order_line_reference = $data["order_line_reference"];
            $this->quantity = $data["quantity"];
            $this->accepted_quantity = $data["accepted_quantity"];
            $this->rejected_quantity = $data["rejected_quantity"];
            $this->refund_incl_vat = $data["refund_incl_vat"];
            $this->refund_excl_vat = $data["refund_excl_vat"];
            $this->manual_refund_incl_vat = $data["manual_refund_incl_vat"];
            $this->manual_refund_excl_vat = $data["manual_refund_excl_vat"];
        }
    }
    
    /**
     * Gets order_line_reference
     * @return string
     */
    public function getOrderLineReference()
    {
        return $this->order_line_reference;
    }
  
    /**
     * Sets order_line_reference
     * @param string $order_line_reference 
     * @return $this
     */
    public function setOrderLineReference($order_line_reference)
    {
        
        $this->order_line_reference = $order_line_reference;
        return $this;
    }
    
    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
  
    /**
     * Sets quantity
     * @param int $quantity 
     * @return $this
     */
    public function setQuantity($quantity)
    {
        
        $this->quantity = $quantity;
        return $this;
    }
    
    /**
     * Gets accepted_quantity
     * @return int
     */
    public function getAcceptedQuantity()
    {
        return $this->accepted_quantity;
    }
  
    /**
     * Sets accepted_quantity
     * @param int $accepted_quantity 
     * @return $this
     */
    public function setAcceptedQuantity($accepted_quantity)
    {
        
        $this->accepted_quantity = $accepted_quantity;
        return $this;
    }
    
    /**
     * Gets rejected_quantity
     * @return int
     */
    public function getRejectedQuantity()
    {
        return $this->rejected_quantity;
    }
  
    /**
     * Sets rejected_quantity
     * @param int $rejected_quantity 
     * @return $this
     */
    public function setRejectedQuantity($rejected_quantity)
    {
        
        $this->rejected_quantity = $rejected_quantity;
        return $this;
    }
    
    /**
     * Gets refund_incl_vat
     * @return double
     */
    public function getRefundInclVat()
    {
        return $this->refund_incl_vat;
    }
  
    /**
     * Sets refund_incl_vat
     * @param double $refund_incl_vat 
     * @return $this
     */
    public function setRefundInclVat($refund_incl_vat)
    {
        
        $this->refund_incl_vat = $refund_incl_vat;
        return $this;
    }
    
    /**
     * Gets refund_excl_vat
     * @return double
     */
    public function getRefundExclVat()
    {
        return $this->refund_excl_vat;
    }
  
    /**
     * Sets refund_excl_vat
     * @param double $refund_excl_vat 
     * @return $this
     */
    public function setRefundExclVat($refund_excl_vat)
    {
        
        $this->refund_excl_vat = $refund_excl_vat;
        return $this;
    }
    
    /**
     * Gets manual_refund_incl_vat
     * @return double
     */
    public function getManualRefundInclVat()
    {
        return $this->manual_refund_incl_vat;
    }
  
    /**
     * Sets manual_refund_incl_vat
     * @param double $manual_refund_incl_vat 
     * @return $this
     */
    public function setManualRefundInclVat($manual_refund_incl_vat)
    {
        
        $this->manual_refund_incl_vat = $manual_refund_incl_vat;
        return $this;
    }
    
    /**
     * Gets manual_refund_excl_vat
     * @return double
     */
    public function getManualRefundExclVat()
    {
        return $this->manual_refund_excl_vat;
    }
  
    /**
     * Sets manual_refund_excl_vat
     * @param double $manual_refund_excl_vat 
     * @return $this
     */
    public function setManualRefundExclVat($manual_refund_excl_vat)
    {
        
        $this->manual_refund_excl_vat = $manual_refund_excl_vat;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}