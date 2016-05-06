<?php
/**
 * ProductRequestViewModel
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
 * ProductRequestViewModel Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductRequestViewModel implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'children' => '\Swagger\Client\Model\ProductRequestViewModel[]',
        'merchant_reference' => 'string',
        'name' => 'string',
        'description' => 'string',
        'details' => 'string',
        'brand' => 'string',
        'size' => 'string',
        'color' => 'string',
        'ean' => 'string',
        'vendor_product_no' => 'string',
        'stock' => 'int',
        'price' => 'double',
        'msrp' => 'double',
        'purchase_price' => 'double',
        'discount_rate' => 'double',
        'vat_rate' => 'double',
        'shipping_cost' => 'double',
        'shipping_time' => 'string',
        'url' => 'string',
        'image_url' => 'string',
        'category_trail' => 'string',
        'extra_data' => 'map[string,string]'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'children' => 'Children',
        'merchant_reference' => 'MerchantReference',
        'name' => 'Name',
        'description' => 'Description',
        'details' => 'Details',
        'brand' => 'Brand',
        'size' => 'Size',
        'color' => 'Color',
        'ean' => 'Ean',
        'vendor_product_no' => 'VendorProductNo',
        'stock' => 'Stock',
        'price' => 'Price',
        'msrp' => 'MSRP',
        'purchase_price' => 'PurchasePrice',
        'discount_rate' => 'DiscountRate',
        'vat_rate' => 'VatRate',
        'shipping_cost' => 'ShippingCost',
        'shipping_time' => 'ShippingTime',
        'url' => 'Url',
        'image_url' => 'ImageUrl',
        'category_trail' => 'CategoryTrail',
        'extra_data' => 'ExtraData'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'children' => 'setChildren',
        'merchant_reference' => 'setMerchantReference',
        'name' => 'setName',
        'description' => 'setDescription',
        'details' => 'setDetails',
        'brand' => 'setBrand',
        'size' => 'setSize',
        'color' => 'setColor',
        'ean' => 'setEan',
        'vendor_product_no' => 'setVendorProductNo',
        'stock' => 'setStock',
        'price' => 'setPrice',
        'msrp' => 'setMsrp',
        'purchase_price' => 'setPurchasePrice',
        'discount_rate' => 'setDiscountRate',
        'vat_rate' => 'setVatRate',
        'shipping_cost' => 'setShippingCost',
        'shipping_time' => 'setShippingTime',
        'url' => 'setUrl',
        'image_url' => 'setImageUrl',
        'category_trail' => 'setCategoryTrail',
        'extra_data' => 'setExtraData'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'children' => 'getChildren',
        'merchant_reference' => 'getMerchantReference',
        'name' => 'getName',
        'description' => 'getDescription',
        'details' => 'getDetails',
        'brand' => 'getBrand',
        'size' => 'getSize',
        'color' => 'getColor',
        'ean' => 'getEan',
        'vendor_product_no' => 'getVendorProductNo',
        'stock' => 'getStock',
        'price' => 'getPrice',
        'msrp' => 'getMsrp',
        'purchase_price' => 'getPurchasePrice',
        'discount_rate' => 'getDiscountRate',
        'vat_rate' => 'getVatRate',
        'shipping_cost' => 'getShippingCost',
        'shipping_time' => 'getShippingTime',
        'url' => 'getUrl',
        'image_url' => 'getImageUrl',
        'category_trail' => 'getCategoryTrail',
        'extra_data' => 'getExtraData'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $children 
      * @var \Swagger\Client\Model\ProductRequestViewModel[]
      */
    protected $children;
    
    /**
      * $merchant_reference 
      * @var string
      */
    protected $merchant_reference;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $description 
      * @var string
      */
    protected $description;
    
    /**
      * $details 
      * @var string
      */
    protected $details;
    
    /**
      * $brand 
      * @var string
      */
    protected $brand;
    
    /**
      * $size 
      * @var string
      */
    protected $size;
    
    /**
      * $color 
      * @var string
      */
    protected $color;
    
    /**
      * $ean 
      * @var string
      */
    protected $ean;
    
    /**
      * $vendor_product_no 
      * @var string
      */
    protected $vendor_product_no;
    
    /**
      * $stock 
      * @var int
      */
    protected $stock;
    
    /**
      * $price 
      * @var double
      */
    protected $price;
    
    /**
      * $msrp 
      * @var double
      */
    protected $msrp;
    
    /**
      * $purchase_price 
      * @var double
      */
    protected $purchase_price;
    
    /**
      * $discount_rate 
      * @var double
      */
    protected $discount_rate;
    
    /**
      * $vat_rate 
      * @var double
      */
    protected $vat_rate;
    
    /**
      * $shipping_cost 
      * @var double
      */
    protected $shipping_cost;
    
    /**
      * $shipping_time 
      * @var string
      */
    protected $shipping_time;
    
    /**
      * $url 
      * @var string
      */
    protected $url;
    
    /**
      * $image_url 
      * @var string
      */
    protected $image_url;
    
    /**
      * $category_trail 
      * @var string
      */
    protected $category_trail;
    
    /**
      * $extra_data 
      * @var map[string,string]
      */
    protected $extra_data;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->children = $data["children"];
            $this->merchant_reference = $data["merchant_reference"];
            $this->name = $data["name"];
            $this->description = $data["description"];
            $this->details = $data["details"];
            $this->brand = $data["brand"];
            $this->size = $data["size"];
            $this->color = $data["color"];
            $this->ean = $data["ean"];
            $this->vendor_product_no = $data["vendor_product_no"];
            $this->stock = $data["stock"];
            $this->price = $data["price"];
            $this->msrp = $data["msrp"];
            $this->purchase_price = $data["purchase_price"];
            $this->discount_rate = $data["discount_rate"];
            $this->vat_rate = $data["vat_rate"];
            $this->shipping_cost = $data["shipping_cost"];
            $this->shipping_time = $data["shipping_time"];
            $this->url = $data["url"];
            $this->image_url = $data["image_url"];
            $this->category_trail = $data["category_trail"];
            $this->extra_data = $data["extra_data"];
        }
    }
    
    /**
     * Gets children
     * @return \Swagger\Client\Model\ProductRequestViewModel[]
     */
    public function getChildren()
    {
        return $this->children;
    }
  
    /**
     * Sets children
     * @param \Swagger\Client\Model\ProductRequestViewModel[] $children 
     * @return $this
     */
    public function setChildren($children)
    {
        
        $this->children = $children;
        return $this;
    }
    
    /**
     * Gets merchant_reference
     * @return string
     */
    public function getMerchantReference()
    {
        return $this->merchant_reference;
    }
  
    /**
     * Sets merchant_reference
     * @param string $merchant_reference 
     * @return $this
     */
    public function setMerchantReference($merchant_reference)
    {
        
        $this->merchant_reference = $merchant_reference;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
  
    /**
     * Sets description
     * @param string $description 
     * @return $this
     */
    public function setDescription($description)
    {
        
        $this->description = $description;
        return $this;
    }
    
    /**
     * Gets details
     * @return string
     */
    public function getDetails()
    {
        return $this->details;
    }
  
    /**
     * Sets details
     * @param string $details 
     * @return $this
     */
    public function setDetails($details)
    {
        
        $this->details = $details;
        return $this;
    }
    
    /**
     * Gets brand
     * @return string
     */
    public function getBrand()
    {
        return $this->brand;
    }
  
    /**
     * Sets brand
     * @param string $brand 
     * @return $this
     */
    public function setBrand($brand)
    {
        
        $this->brand = $brand;
        return $this;
    }
    
    /**
     * Gets size
     * @return string
     */
    public function getSize()
    {
        return $this->size;
    }
  
    /**
     * Sets size
     * @param string $size 
     * @return $this
     */
    public function setSize($size)
    {
        
        $this->size = $size;
        return $this;
    }
    
    /**
     * Gets color
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
  
    /**
     * Sets color
     * @param string $color 
     * @return $this
     */
    public function setColor($color)
    {
        
        $this->color = $color;
        return $this;
    }
    
    /**
     * Gets ean
     * @return string
     */
    public function getEan()
    {
        return $this->ean;
    }
  
    /**
     * Sets ean
     * @param string $ean 
     * @return $this
     */
    public function setEan($ean)
    {
        
        $this->ean = $ean;
        return $this;
    }
    
    /**
     * Gets vendor_product_no
     * @return string
     */
    public function getVendorProductNo()
    {
        return $this->vendor_product_no;
    }
  
    /**
     * Sets vendor_product_no
     * @param string $vendor_product_no 
     * @return $this
     */
    public function setVendorProductNo($vendor_product_no)
    {
        
        $this->vendor_product_no = $vendor_product_no;
        return $this;
    }
    
    /**
     * Gets stock
     * @return int
     */
    public function getStock()
    {
        return $this->stock;
    }
  
    /**
     * Sets stock
     * @param int $stock 
     * @return $this
     */
    public function setStock($stock)
    {
        
        $this->stock = $stock;
        return $this;
    }
    
    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->price;
    }
  
    /**
     * Sets price
     * @param double $price 
     * @return $this
     */
    public function setPrice($price)
    {
        
        $this->price = $price;
        return $this;
    }
    
    /**
     * Gets msrp
     * @return double
     */
    public function getMsrp()
    {
        return $this->msrp;
    }
  
    /**
     * Sets msrp
     * @param double $msrp 
     * @return $this
     */
    public function setMsrp($msrp)
    {
        
        $this->msrp = $msrp;
        return $this;
    }
    
    /**
     * Gets purchase_price
     * @return double
     */
    public function getPurchasePrice()
    {
        return $this->purchase_price;
    }
  
    /**
     * Sets purchase_price
     * @param double $purchase_price 
     * @return $this
     */
    public function setPurchasePrice($purchase_price)
    {
        
        $this->purchase_price = $purchase_price;
        return $this;
    }
    
    /**
     * Gets discount_rate
     * @return double
     */
    public function getDiscountRate()
    {
        return $this->discount_rate;
    }
  
    /**
     * Sets discount_rate
     * @param double $discount_rate 
     * @return $this
     */
    public function setDiscountRate($discount_rate)
    {
        
        $this->discount_rate = $discount_rate;
        return $this;
    }
    
    /**
     * Gets vat_rate
     * @return double
     */
    public function getVatRate()
    {
        return $this->vat_rate;
    }
  
    /**
     * Sets vat_rate
     * @param double $vat_rate 
     * @return $this
     */
    public function setVatRate($vat_rate)
    {
        
        $this->vat_rate = $vat_rate;
        return $this;
    }
    
    /**
     * Gets shipping_cost
     * @return double
     */
    public function getShippingCost()
    {
        return $this->shipping_cost;
    }
  
    /**
     * Sets shipping_cost
     * @param double $shipping_cost 
     * @return $this
     */
    public function setShippingCost($shipping_cost)
    {
        
        $this->shipping_cost = $shipping_cost;
        return $this;
    }
    
    /**
     * Gets shipping_time
     * @return string
     */
    public function getShippingTime()
    {
        return $this->shipping_time;
    }
  
    /**
     * Sets shipping_time
     * @param string $shipping_time 
     * @return $this
     */
    public function setShippingTime($shipping_time)
    {
        
        $this->shipping_time = $shipping_time;
        return $this;
    }
    
    /**
     * Gets url
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
  
    /**
     * Sets url
     * @param string $url 
     * @return $this
     */
    public function setUrl($url)
    {
        
        $this->url = $url;
        return $this;
    }
    
    /**
     * Gets image_url
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }
  
    /**
     * Sets image_url
     * @param string $image_url 
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        
        $this->image_url = $image_url;
        return $this;
    }
    
    /**
     * Gets category_trail
     * @return string
     */
    public function getCategoryTrail()
    {
        return $this->category_trail;
    }
  
    /**
     * Sets category_trail
     * @param string $category_trail 
     * @return $this
     */
    public function setCategoryTrail($category_trail)
    {
        
        $this->category_trail = $category_trail;
        return $this;
    }
    
    /**
     * Gets extra_data
     * @return map[string,string]
     */
    public function getExtraData()
    {
        return $this->extra_data;
    }
  
    /**
     * Sets extra_data
     * @param map[string,string] $extra_data 
     * @return $this
     */
    public function setExtraData($extra_data)
    {
        
        $this->extra_data = $extra_data;
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