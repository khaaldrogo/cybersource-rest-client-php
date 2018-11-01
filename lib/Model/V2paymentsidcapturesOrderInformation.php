<?php
/**
 * V2paymentsidcapturesOrderInformation
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
 * V2paymentsidcapturesOrderInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V2paymentsidcapturesOrderInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v2paymentsidcaptures_orderInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amountDetails' => '\CyberSource\Model\V2paymentsidcapturesOrderInformationAmountDetails',
        'billTo' => '\CyberSource\Model\V2paymentsidcapturesOrderInformationBillTo',
        'shipTo' => '\CyberSource\Model\V2paymentsidcapturesOrderInformationShipTo',
        'lineItems' => '\CyberSource\Model\V2paymentsOrderInformationLineItems[]',
        'invoiceDetails' => '\CyberSource\Model\V2paymentsidcapturesOrderInformationInvoiceDetails',
        'shippingDetails' => '\CyberSource\Model\V2paymentsidcapturesOrderInformationShippingDetails'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amountDetails' => null,
        'billTo' => null,
        'shipTo' => null,
        'lineItems' => null,
        'invoiceDetails' => null,
        'shippingDetails' => null
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
        'amountDetails' => 'amountDetails',
        'billTo' => 'billTo',
        'shipTo' => 'shipTo',
        'lineItems' => 'lineItems',
        'invoiceDetails' => 'invoiceDetails',
        'shippingDetails' => 'shippingDetails'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'amountDetails' => 'setAmountDetails',
        'billTo' => 'setBillTo',
        'shipTo' => 'setShipTo',
        'lineItems' => 'setLineItems',
        'invoiceDetails' => 'setInvoiceDetails',
        'shippingDetails' => 'setShippingDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'amountDetails' => 'getAmountDetails',
        'billTo' => 'getBillTo',
        'shipTo' => 'getShipTo',
        'lineItems' => 'getLineItems',
        'invoiceDetails' => 'getInvoiceDetails',
        'shippingDetails' => 'getShippingDetails'
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
        $this->container['amountDetails'] = isset($data['amountDetails']) ? $data['amountDetails'] : null;
        $this->container['billTo'] = isset($data['billTo']) ? $data['billTo'] : null;
        $this->container['shipTo'] = isset($data['shipTo']) ? $data['shipTo'] : null;
        $this->container['lineItems'] = isset($data['lineItems']) ? $data['lineItems'] : null;
        $this->container['invoiceDetails'] = isset($data['invoiceDetails']) ? $data['invoiceDetails'] : null;
        $this->container['shippingDetails'] = isset($data['shippingDetails']) ? $data['shippingDetails'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

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

        return true;
    }


    /**
     * Gets amountDetails
     * @return \CyberSource\Model\V2paymentsidcapturesOrderInformationAmountDetails
     */
    public function getAmountDetails()
    {
        return $this->container['amountDetails'];
    }

    /**
     * Sets amountDetails
     * @param \CyberSource\Model\V2paymentsidcapturesOrderInformationAmountDetails $amountDetails
     * @return $this
     */
    public function setAmountDetails($amountDetails)
    {
        $this->container['amountDetails'] = $amountDetails;

        return $this;
    }

    /**
     * Gets billTo
     * @return \CyberSource\Model\V2paymentsidcapturesOrderInformationBillTo
     */
    public function getBillTo()
    {
        return $this->container['billTo'];
    }

    /**
     * Sets billTo
     * @param \CyberSource\Model\V2paymentsidcapturesOrderInformationBillTo $billTo
     * @return $this
     */
    public function setBillTo($billTo)
    {
        $this->container['billTo'] = $billTo;

        return $this;
    }

    /**
     * Gets shipTo
     * @return \CyberSource\Model\V2paymentsidcapturesOrderInformationShipTo
     */
    public function getShipTo()
    {
        return $this->container['shipTo'];
    }

    /**
     * Sets shipTo
     * @param \CyberSource\Model\V2paymentsidcapturesOrderInformationShipTo $shipTo
     * @return $this
     */
    public function setShipTo($shipTo)
    {
        $this->container['shipTo'] = $shipTo;

        return $this;
    }

    /**
     * Gets lineItems
     * @return \CyberSource\Model\V2paymentsOrderInformationLineItems[]
     */
    public function getLineItems()
    {
        return $this->container['lineItems'];
    }

    /**
     * Sets lineItems
     * @param \CyberSource\Model\V2paymentsOrderInformationLineItems[] $lineItems
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets invoiceDetails
     * @return \CyberSource\Model\V2paymentsidcapturesOrderInformationInvoiceDetails
     */
    public function getInvoiceDetails()
    {
        return $this->container['invoiceDetails'];
    }

    /**
     * Sets invoiceDetails
     * @param \CyberSource\Model\V2paymentsidcapturesOrderInformationInvoiceDetails $invoiceDetails
     * @return $this
     */
    public function setInvoiceDetails($invoiceDetails)
    {
        $this->container['invoiceDetails'] = $invoiceDetails;

        return $this;
    }

    /**
     * Gets shippingDetails
     * @return \CyberSource\Model\V2paymentsidcapturesOrderInformationShippingDetails
     */
    public function getShippingDetails()
    {
        return $this->container['shippingDetails'];
    }

    /**
     * Sets shippingDetails
     * @param \CyberSource\Model\V2paymentsidcapturesOrderInformationShippingDetails $shippingDetails
     * @return $this
     */
    public function setShippingDetails($shippingDetails)
    {
        $this->container['shippingDetails'] = $shippingDetails;

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


