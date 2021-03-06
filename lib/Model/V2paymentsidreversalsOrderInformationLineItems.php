<?php
/**
 * V2paymentsidreversalsOrderInformationLineItems
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * V2paymentsidreversalsOrderInformationLineItems Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V2paymentsidreversalsOrderInformationLineItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v2paymentsidreversals_orderInformation_lineItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'quantity' => 'float',
        'unitPrice' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'quantity' => null,
        'unitPrice' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'quantity' => 'quantity',
        'unitPrice' => 'unitPrice'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'quantity' => 'setQuantity',
        'unitPrice' => 'setUnitPrice'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'quantity' => 'getQuantity',
        'unitPrice' => 'getUnitPrice'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] > 9999999999)) {
            $invalid_properties[] = "invalid value for 'quantity', must be smaller than or equal to 9999999999.";
        }

        if (!is_null($this->container['quantity']) && ($this->container['quantity'] < 1)) {
            $invalid_properties[] = "invalid value for 'quantity', must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['unitPrice']) && (strlen($this->container['unitPrice']) > 15)) {
            $invalid_properties[] = "invalid value for 'unitPrice', the character length must be smaller than or equal to 15.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['quantity'] > 9999999999) {
            return false;
        }
        if ($this->container['quantity'] < 1) {
            return false;
        }
        if (strlen($this->container['unitPrice']) > 15) {
            return false;
        }
        return true;
    }


    /**
     * Gets quantity
     * @return float
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param float $quantity For a payment or capture, this field is required when _productCode_ is not **default** or one of the values related to shipping and handling.
     * @return $this
     */
    public function setQuantity($quantity)
    {

        if (!is_null($quantity) && ($quantity > 9999999999)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling V2paymentsidreversalsOrderInformationLineItems., must be smaller than or equal to 9999999999.');
        }
        if (!is_null($quantity) && ($quantity < 1)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling V2paymentsidreversalsOrderInformationLineItems., must be bigger than or equal to 1.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets unitPrice
     * @return string
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     * @param string $unitPrice Per-item price of the product. This value cannot be negative. You can include a decimal point (.), but you cannot include any other special characters. CyberSource truncates the amount to the correct number of decimal places.  For processor-specific information, see the amount field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        if (!is_null($unitPrice) && (strlen($unitPrice) > 15)) {
            throw new \InvalidArgumentException('invalid length for $unitPrice when calling V2paymentsidreversalsOrderInformationLineItems., must be smaller than or equal to 15.');
        }

        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


