<?php
/**
 * V2paymentsOrderInformationAmountDetails
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
 * V2paymentsOrderInformationAmountDetails Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V2paymentsOrderInformationAmountDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v2payments_orderInformation_amountDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalAmount' => 'string',
        'currency' => 'string',
        'discountAmount' => 'string',
        'dutyAmount' => 'string',
        'taxAmount' => 'string',
        'nationalTaxIncluded' => 'string',
        'taxAppliedAfterDiscount' => 'string',
        'taxAppliedLevel' => 'string',
        'taxTypeCode' => 'string',
        'freightAmount' => 'string',
        'foreignAmount' => 'string',
        'foreignCurrency' => 'string',
        'exchangeRate' => 'string',
        'exchangeRateTimeStamp' => 'string',
        'surcharge' => '\CyberSource\Model\V2paymentsOrderInformationAmountDetailsSurcharge',
        'settlementAmount' => 'string',
        'settlementCurrency' => 'string',
        'amexAdditionalAmounts' => '\CyberSource\Model\V2paymentsOrderInformationAmountDetailsAmexAdditionalAmounts[]',
        'taxDetails' => '\CyberSource\Model\V2paymentsOrderInformationAmountDetailsTaxDetails[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalAmount' => null,
        'currency' => null,
        'discountAmount' => null,
        'dutyAmount' => null,
        'taxAmount' => null,
        'nationalTaxIncluded' => null,
        'taxAppliedAfterDiscount' => null,
        'taxAppliedLevel' => null,
        'taxTypeCode' => null,
        'freightAmount' => null,
        'foreignAmount' => null,
        'foreignCurrency' => null,
        'exchangeRate' => null,
        'exchangeRateTimeStamp' => null,
        'surcharge' => null,
        'settlementAmount' => null,
        'settlementCurrency' => null,
        'amexAdditionalAmounts' => null,
        'taxDetails' => null
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
        'totalAmount' => 'totalAmount',
        'currency' => 'currency',
        'discountAmount' => 'discountAmount',
        'dutyAmount' => 'dutyAmount',
        'taxAmount' => 'taxAmount',
        'nationalTaxIncluded' => 'nationalTaxIncluded',
        'taxAppliedAfterDiscount' => 'taxAppliedAfterDiscount',
        'taxAppliedLevel' => 'taxAppliedLevel',
        'taxTypeCode' => 'taxTypeCode',
        'freightAmount' => 'freightAmount',
        'foreignAmount' => 'foreignAmount',
        'foreignCurrency' => 'foreignCurrency',
        'exchangeRate' => 'exchangeRate',
        'exchangeRateTimeStamp' => 'exchangeRateTimeStamp',
        'surcharge' => 'surcharge',
        'settlementAmount' => 'settlementAmount',
        'settlementCurrency' => 'settlementCurrency',
        'amexAdditionalAmounts' => 'amexAdditionalAmounts',
        'taxDetails' => 'taxDetails'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'totalAmount' => 'setTotalAmount',
        'currency' => 'setCurrency',
        'discountAmount' => 'setDiscountAmount',
        'dutyAmount' => 'setDutyAmount',
        'taxAmount' => 'setTaxAmount',
        'nationalTaxIncluded' => 'setNationalTaxIncluded',
        'taxAppliedAfterDiscount' => 'setTaxAppliedAfterDiscount',
        'taxAppliedLevel' => 'setTaxAppliedLevel',
        'taxTypeCode' => 'setTaxTypeCode',
        'freightAmount' => 'setFreightAmount',
        'foreignAmount' => 'setForeignAmount',
        'foreignCurrency' => 'setForeignCurrency',
        'exchangeRate' => 'setExchangeRate',
        'exchangeRateTimeStamp' => 'setExchangeRateTimeStamp',
        'surcharge' => 'setSurcharge',
        'settlementAmount' => 'setSettlementAmount',
        'settlementCurrency' => 'setSettlementCurrency',
        'amexAdditionalAmounts' => 'setAmexAdditionalAmounts',
        'taxDetails' => 'setTaxDetails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'totalAmount' => 'getTotalAmount',
        'currency' => 'getCurrency',
        'discountAmount' => 'getDiscountAmount',
        'dutyAmount' => 'getDutyAmount',
        'taxAmount' => 'getTaxAmount',
        'nationalTaxIncluded' => 'getNationalTaxIncluded',
        'taxAppliedAfterDiscount' => 'getTaxAppliedAfterDiscount',
        'taxAppliedLevel' => 'getTaxAppliedLevel',
        'taxTypeCode' => 'getTaxTypeCode',
        'freightAmount' => 'getFreightAmount',
        'foreignAmount' => 'getForeignAmount',
        'foreignCurrency' => 'getForeignCurrency',
        'exchangeRate' => 'getExchangeRate',
        'exchangeRateTimeStamp' => 'getExchangeRateTimeStamp',
        'surcharge' => 'getSurcharge',
        'settlementAmount' => 'getSettlementAmount',
        'settlementCurrency' => 'getSettlementCurrency',
        'amexAdditionalAmounts' => 'getAmexAdditionalAmounts',
        'taxDetails' => 'getTaxDetails'
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
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['dutyAmount'] = isset($data['dutyAmount']) ? $data['dutyAmount'] : null;
        $this->container['taxAmount'] = isset($data['taxAmount']) ? $data['taxAmount'] : null;
        $this->container['nationalTaxIncluded'] = isset($data['nationalTaxIncluded']) ? $data['nationalTaxIncluded'] : null;
        $this->container['taxAppliedAfterDiscount'] = isset($data['taxAppliedAfterDiscount']) ? $data['taxAppliedAfterDiscount'] : null;
        $this->container['taxAppliedLevel'] = isset($data['taxAppliedLevel']) ? $data['taxAppliedLevel'] : null;
        $this->container['taxTypeCode'] = isset($data['taxTypeCode']) ? $data['taxTypeCode'] : null;
        $this->container['freightAmount'] = isset($data['freightAmount']) ? $data['freightAmount'] : null;
        $this->container['foreignAmount'] = isset($data['foreignAmount']) ? $data['foreignAmount'] : null;
        $this->container['foreignCurrency'] = isset($data['foreignCurrency']) ? $data['foreignCurrency'] : null;
        $this->container['exchangeRate'] = isset($data['exchangeRate']) ? $data['exchangeRate'] : null;
        $this->container['exchangeRateTimeStamp'] = isset($data['exchangeRateTimeStamp']) ? $data['exchangeRateTimeStamp'] : null;
        $this->container['surcharge'] = isset($data['surcharge']) ? $data['surcharge'] : null;
        $this->container['settlementAmount'] = isset($data['settlementAmount']) ? $data['settlementAmount'] : null;
        $this->container['settlementCurrency'] = isset($data['settlementCurrency']) ? $data['settlementCurrency'] : null;
        $this->container['amexAdditionalAmounts'] = isset($data['amexAdditionalAmounts']) ? $data['amexAdditionalAmounts'] : null;
        $this->container['taxDetails'] = isset($data['taxDetails']) ? $data['taxDetails'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['totalAmount']) && (strlen($this->container['totalAmount']) > 19)) {
            $invalid_properties[] = "invalid value for 'totalAmount', the character length must be smaller than or equal to 19.";
        }

        if (!is_null($this->container['currency']) && (strlen($this->container['currency']) > 3)) {
            $invalid_properties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['discountAmount']) && (strlen($this->container['discountAmount']) > 15)) {
            $invalid_properties[] = "invalid value for 'discountAmount', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['dutyAmount']) && (strlen($this->container['dutyAmount']) > 15)) {
            $invalid_properties[] = "invalid value for 'dutyAmount', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['taxAmount']) && (strlen($this->container['taxAmount']) > 12)) {
            $invalid_properties[] = "invalid value for 'taxAmount', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['nationalTaxIncluded']) && (strlen($this->container['nationalTaxIncluded']) > 1)) {
            $invalid_properties[] = "invalid value for 'nationalTaxIncluded', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['taxAppliedAfterDiscount']) && (strlen($this->container['taxAppliedAfterDiscount']) > 1)) {
            $invalid_properties[] = "invalid value for 'taxAppliedAfterDiscount', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['taxAppliedLevel']) && (strlen($this->container['taxAppliedLevel']) > 1)) {
            $invalid_properties[] = "invalid value for 'taxAppliedLevel', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['taxTypeCode']) && (strlen($this->container['taxTypeCode']) > 3)) {
            $invalid_properties[] = "invalid value for 'taxTypeCode', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['freightAmount']) && (strlen($this->container['freightAmount']) > 13)) {
            $invalid_properties[] = "invalid value for 'freightAmount', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['foreignAmount']) && (strlen($this->container['foreignAmount']) > 15)) {
            $invalid_properties[] = "invalid value for 'foreignAmount', the character length must be smaller than or equal to 15.";
        }

        if (!is_null($this->container['foreignCurrency']) && (strlen($this->container['foreignCurrency']) > 5)) {
            $invalid_properties[] = "invalid value for 'foreignCurrency', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['exchangeRate']) && (strlen($this->container['exchangeRate']) > 13)) {
            $invalid_properties[] = "invalid value for 'exchangeRate', the character length must be smaller than or equal to 13.";
        }

        if (!is_null($this->container['exchangeRateTimeStamp']) && (strlen($this->container['exchangeRateTimeStamp']) > 14)) {
            $invalid_properties[] = "invalid value for 'exchangeRateTimeStamp', the character length must be smaller than or equal to 14.";
        }

        if (!is_null($this->container['settlementAmount']) && (strlen($this->container['settlementAmount']) > 12)) {
            $invalid_properties[] = "invalid value for 'settlementAmount', the character length must be smaller than or equal to 12.";
        }

        if (!is_null($this->container['settlementCurrency']) && (strlen($this->container['settlementCurrency']) > 3)) {
            $invalid_properties[] = "invalid value for 'settlementCurrency', the character length must be smaller than or equal to 3.";
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

        if (strlen($this->container['totalAmount']) > 19) {
            return false;
        }
        if (strlen($this->container['currency']) > 3) {
            return false;
        }
        if (strlen($this->container['discountAmount']) > 15) {
            return false;
        }
        if (strlen($this->container['dutyAmount']) > 15) {
            return false;
        }
        if (strlen($this->container['taxAmount']) > 12) {
            return false;
        }
        if (strlen($this->container['nationalTaxIncluded']) > 1) {
            return false;
        }
        if (strlen($this->container['taxAppliedAfterDiscount']) > 1) {
            return false;
        }
        if (strlen($this->container['taxAppliedLevel']) > 1) {
            return false;
        }
        if (strlen($this->container['taxTypeCode']) > 3) {
            return false;
        }
        if (strlen($this->container['freightAmount']) > 13) {
            return false;
        }
        if (strlen($this->container['foreignAmount']) > 15) {
            return false;
        }
        if (strlen($this->container['foreignCurrency']) > 5) {
            return false;
        }
        if (strlen($this->container['exchangeRate']) > 13) {
            return false;
        }
        if (strlen($this->container['exchangeRateTimeStamp']) > 14) {
            return false;
        }
        if (strlen($this->container['settlementAmount']) > 12) {
            return false;
        }
        if (strlen($this->container['settlementCurrency']) > 3) {
            return false;
        }
        return true;
    }


    /**
     * Gets totalAmount
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     * @param string $totalAmount Grand total for the order. You can include a decimal point (.), but no other special characters. CyberSource truncates the amount to the correct number of decimal places.  * CTV, FDCCompass, Paymentech (<= 12)  For processor-specific information, see the grand_total_amount field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        if (!is_null($totalAmount) && (strlen($totalAmount) > 19)) {
            throw new \InvalidArgumentException('invalid length for $totalAmount when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 19.');
        }

        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency Currency used for the order. Use the three-character ISO Standard Currency Codes.  For an authorization reversal or a capture, you must use the same currency that you used in your request for Payment API.
     * @return $this
     */
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets discountAmount
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     * @param string $discountAmount Total discount amount applied to the order.  For processor-specific information, see the order_discount_amount field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        if (!is_null($discountAmount) && (strlen($discountAmount) > 15)) {
            throw new \InvalidArgumentException('invalid length for $discountAmount when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 15.');
        }

        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets dutyAmount
     * @return string
     */
    public function getDutyAmount()
    {
        return $this->container['dutyAmount'];
    }

    /**
     * Sets dutyAmount
     * @param string $dutyAmount Total charges for any import or export duties included in the order.  For processor-specific information, see the duty_amount field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setDutyAmount($dutyAmount)
    {
        if (!is_null($dutyAmount) && (strlen($dutyAmount) > 15)) {
            throw new \InvalidArgumentException('invalid length for $dutyAmount when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 15.');
        }

        $this->container['dutyAmount'] = $dutyAmount;

        return $this;
    }

    /**
     * Gets taxAmount
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->container['taxAmount'];
    }

    /**
     * Sets taxAmount
     * @param string $taxAmount Total tax amount for all the items in the order.  For processor-specific information, see the total_tax_amount field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setTaxAmount($taxAmount)
    {
        if (!is_null($taxAmount) && (strlen($taxAmount) > 12)) {
            throw new \InvalidArgumentException('invalid length for $taxAmount when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 12.');
        }

        $this->container['taxAmount'] = $taxAmount;

        return $this;
    }

    /**
     * Gets nationalTaxIncluded
     * @return string
     */
    public function getNationalTaxIncluded()
    {
        return $this->container['nationalTaxIncluded'];
    }

    /**
     * Sets nationalTaxIncluded
     * @param string $nationalTaxIncluded Flag that indicates whether a national tax is included in the order total.  Possible values:   - **0**: national tax not included  - **1**: national tax included  For processor-specific information, see the national_tax_indicator field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setNationalTaxIncluded($nationalTaxIncluded)
    {
        if (!is_null($nationalTaxIncluded) && (strlen($nationalTaxIncluded) > 1)) {
            throw new \InvalidArgumentException('invalid length for $nationalTaxIncluded when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 1.');
        }

        $this->container['nationalTaxIncluded'] = $nationalTaxIncluded;

        return $this;
    }

    /**
     * Gets taxAppliedAfterDiscount
     * @return string
     */
    public function getTaxAppliedAfterDiscount()
    {
        return $this->container['taxAppliedAfterDiscount'];
    }

    /**
     * Sets taxAppliedAfterDiscount
     * @param string $taxAppliedAfterDiscount Flag that indicates how the merchant manages discounts.  Possible values:   - **0**: no invoice level discount included  - **1**: tax calculated on the postdiscount invoice total  - **2**: tax calculated on the prediscount invoice total  For processor-specific information, see the order_discount_management_indicator field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setTaxAppliedAfterDiscount($taxAppliedAfterDiscount)
    {
        if (!is_null($taxAppliedAfterDiscount) && (strlen($taxAppliedAfterDiscount) > 1)) {
            throw new \InvalidArgumentException('invalid length for $taxAppliedAfterDiscount when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 1.');
        }

        $this->container['taxAppliedAfterDiscount'] = $taxAppliedAfterDiscount;

        return $this;
    }

    /**
     * Gets taxAppliedLevel
     * @return string
     */
    public function getTaxAppliedLevel()
    {
        return $this->container['taxAppliedLevel'];
    }

    /**
     * Sets taxAppliedLevel
     * @param string $taxAppliedLevel Flag that indicates how you calculate tax.  Possible values:   - **0**: net prices with tax calculated at line item level  - **1**: net prices with tax calculated at invoice level  - **2**: gross prices with tax provided at line item level  - **3**: gross prices with tax provided at invoice level  - **4**: no tax applies on the invoice for the transaction  For processor-specific information, see the tax_management_indicator field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setTaxAppliedLevel($taxAppliedLevel)
    {
        if (!is_null($taxAppliedLevel) && (strlen($taxAppliedLevel) > 1)) {
            throw new \InvalidArgumentException('invalid length for $taxAppliedLevel when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 1.');
        }

        $this->container['taxAppliedLevel'] = $taxAppliedLevel;

        return $this;
    }

    /**
     * Gets taxTypeCode
     * @return string
     */
    public function getTaxTypeCode()
    {
        return $this->container['taxTypeCode'];
    }

    /**
     * Sets taxTypeCode
     * @param string $taxTypeCode For tax amounts that can be categorized as one tax type.  This field contains the tax type code that corresponds to the entry in the _lineItems.taxAmount_ field.  Possible values:   - **056**: sales tax (U.S only)  - **TX~**: all taxes (Canada only)   Note ~ = space.  For processor-specific information, see the total_tax_type_code field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setTaxTypeCode($taxTypeCode)
    {
        if (!is_null($taxTypeCode) && (strlen($taxTypeCode) > 3)) {
            throw new \InvalidArgumentException('invalid length for $taxTypeCode when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 3.');
        }

        $this->container['taxTypeCode'] = $taxTypeCode;

        return $this;
    }

    /**
     * Gets freightAmount
     * @return string
     */
    public function getFreightAmount()
    {
        return $this->container['freightAmount'];
    }

    /**
     * Sets freightAmount
     * @param string $freightAmount Total freight or shipping and handling charges for the order. When you include this field in your request, you must also include the **totalAmount** field.  For processor-specific information, see the freight_amount field in [Level II and Level III Processing Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/Level_2_3_SCMP_API/html)
     * @return $this
     */
    public function setFreightAmount($freightAmount)
    {
        if (!is_null($freightAmount) && (strlen($freightAmount) > 13)) {
            throw new \InvalidArgumentException('invalid length for $freightAmount when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 13.');
        }

        $this->container['freightAmount'] = $freightAmount;

        return $this;
    }

    /**
     * Gets foreignAmount
     * @return string
     */
    public function getForeignAmount()
    {
        return $this->container['foreignAmount'];
    }

    /**
     * Sets foreignAmount
     * @param string $foreignAmount Converted amount returned by the DCC service.  For processor-specific information, see the foreign_amount field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setForeignAmount($foreignAmount)
    {
        if (!is_null($foreignAmount) && (strlen($foreignAmount) > 15)) {
            throw new \InvalidArgumentException('invalid length for $foreignAmount when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 15.');
        }

        $this->container['foreignAmount'] = $foreignAmount;

        return $this;
    }

    /**
     * Gets foreignCurrency
     * @return string
     */
    public function getForeignCurrency()
    {
        return $this->container['foreignCurrency'];
    }

    /**
     * Sets foreignCurrency
     * @param string $foreignCurrency Billing currency returned by the DCC service.  For processor-specific information, see the foreign_currency field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setForeignCurrency($foreignCurrency)
    {
        if (!is_null($foreignCurrency) && (strlen($foreignCurrency) > 5)) {
            throw new \InvalidArgumentException('invalid length for $foreignCurrency when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 5.');
        }

        $this->container['foreignCurrency'] = $foreignCurrency;

        return $this;
    }

    /**
     * Gets exchangeRate
     * @return string
     */
    public function getExchangeRate()
    {
        return $this->container['exchangeRate'];
    }

    /**
     * Sets exchangeRate
     * @param string $exchangeRate Exchange rate returned by the DCC service. Includes a decimal point and a maximum of 4 decimal places.  For processor-specific information, see the exchange_rate field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setExchangeRate($exchangeRate)
    {
        if (!is_null($exchangeRate) && (strlen($exchangeRate) > 13)) {
            throw new \InvalidArgumentException('invalid length for $exchangeRate when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 13.');
        }

        $this->container['exchangeRate'] = $exchangeRate;

        return $this;
    }

    /**
     * Gets exchangeRateTimeStamp
     * @return string
     */
    public function getExchangeRateTimeStamp()
    {
        return $this->container['exchangeRateTimeStamp'];
    }

    /**
     * Sets exchangeRateTimeStamp
     * @param string $exchangeRateTimeStamp Time stamp for the exchange rate. This value is returned by the DCC service.  Format: `YYYYMMDD~HH:MM`  where ~ denotes a space.  For processor-specific information, see the exchange_rate_timestamp field in [Credit Card Services Using the SCMP API.](http://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html)
     * @return $this
     */
    public function setExchangeRateTimeStamp($exchangeRateTimeStamp)
    {
        if (!is_null($exchangeRateTimeStamp) && (strlen($exchangeRateTimeStamp) > 14)) {
            throw new \InvalidArgumentException('invalid length for $exchangeRateTimeStamp when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 14.');
        }

        $this->container['exchangeRateTimeStamp'] = $exchangeRateTimeStamp;

        return $this;
    }

    /**
     * Gets surcharge
     * @return \CyberSource\Model\V2paymentsOrderInformationAmountDetailsSurcharge
     */
    public function getSurcharge()
    {
        return $this->container['surcharge'];
    }

    /**
     * Sets surcharge
     * @param \CyberSource\Model\V2paymentsOrderInformationAmountDetailsSurcharge $surcharge
     * @return $this
     */
    public function setSurcharge($surcharge)
    {
        $this->container['surcharge'] = $surcharge;

        return $this;
    }

    /**
     * Gets settlementAmount
     * @return string
     */
    public function getSettlementAmount()
    {
        return $this->container['settlementAmount'];
    }

    /**
     * Sets settlementAmount
     * @param string $settlementAmount This is a multicurrency field. It contains the transaction amount (field 4), converted to the Currency used to bill the cardholderâ€™s account.
     * @return $this
     */
    public function setSettlementAmount($settlementAmount)
    {
        if (!is_null($settlementAmount) && (strlen($settlementAmount) > 12)) {
            throw new \InvalidArgumentException('invalid length for $settlementAmount when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 12.');
        }

        $this->container['settlementAmount'] = $settlementAmount;

        return $this;
    }

    /**
     * Gets settlementCurrency
     * @return string
     */
    public function getSettlementCurrency()
    {
        return $this->container['settlementCurrency'];
    }

    /**
     * Sets settlementCurrency
     * @param string $settlementCurrency This is a multicurrency-only field. It contains a 3-digit numeric code that identifies the currency used by the issuer to bill the cardholder's account.
     * @return $this
     */
    public function setSettlementCurrency($settlementCurrency)
    {
        if (!is_null($settlementCurrency) && (strlen($settlementCurrency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $settlementCurrency when calling V2paymentsOrderInformationAmountDetails., must be smaller than or equal to 3.');
        }

        $this->container['settlementCurrency'] = $settlementCurrency;

        return $this;
    }

    /**
     * Gets amexAdditionalAmounts
     * @return \CyberSource\Model\V2paymentsOrderInformationAmountDetailsAmexAdditionalAmounts[]
     */
    public function getAmexAdditionalAmounts()
    {
        return $this->container['amexAdditionalAmounts'];
    }

    /**
     * Sets amexAdditionalAmounts
     * @param \CyberSource\Model\V2paymentsOrderInformationAmountDetailsAmexAdditionalAmounts[] $amexAdditionalAmounts
     * @return $this
     */
    public function setAmexAdditionalAmounts($amexAdditionalAmounts)
    {
        $this->container['amexAdditionalAmounts'] = $amexAdditionalAmounts;

        return $this;
    }

    /**
     * Gets taxDetails
     * @return \CyberSource\Model\V2paymentsOrderInformationAmountDetailsTaxDetails[]
     */
    public function getTaxDetails()
    {
        return $this->container['taxDetails'];
    }

    /**
     * Sets taxDetails
     * @param \CyberSource\Model\V2paymentsOrderInformationAmountDetailsTaxDetails[] $taxDetails
     * @return $this
     */
    public function setTaxDetails($taxDetails)
    {
        $this->container['taxDetails'] = $taxDetails;

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


