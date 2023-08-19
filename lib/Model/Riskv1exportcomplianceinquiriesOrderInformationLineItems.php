<?php
/**
 * Riskv1exportcomplianceinquiriesOrderInformationLineItems
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Merged Spec
 *
 * All CyberSource API specs merged together. These are available at https://developer.cybersource.com/api/reference/api-reference.html
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
 * Riskv1exportcomplianceinquiriesOrderInformationLineItems Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Riskv1exportcomplianceinquiriesOrderInformationLineItems implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'riskv1exportcomplianceinquiries_orderInformation_lineItems';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'unitPrice' => 'string',
        'allowedExportCountries' => 'string[]',
        'restrictedExportCountries' => 'string[]',
        'quantity' => 'int',
        'productSKU' => 'string',
        'productRisk' => 'string',
        'productName' => 'string',
        'productCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'unitPrice' => null,
        'allowedExportCountries' => null,
        'restrictedExportCountries' => null,
        'quantity' => null,
        'productSKU' => null,
        'productRisk' => null,
        'productName' => null,
        'productCode' => null
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
        'unitPrice' => 'unitPrice',
        'allowedExportCountries' => 'allowedExportCountries',
        'restrictedExportCountries' => 'restrictedExportCountries',
        'quantity' => 'quantity',
        'productSKU' => 'productSKU',
        'productRisk' => 'productRisk',
        'productName' => 'productName',
        'productCode' => 'productCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'unitPrice' => 'setUnitPrice',
        'allowedExportCountries' => 'setAllowedExportCountries',
        'restrictedExportCountries' => 'setRestrictedExportCountries',
        'quantity' => 'setQuantity',
        'productSKU' => 'setProductSKU',
        'productRisk' => 'setProductRisk',
        'productName' => 'setProductName',
        'productCode' => 'setProductCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'unitPrice' => 'getUnitPrice',
        'allowedExportCountries' => 'getAllowedExportCountries',
        'restrictedExportCountries' => 'getRestrictedExportCountries',
        'quantity' => 'getQuantity',
        'productSKU' => 'getProductSKU',
        'productRisk' => 'getProductRisk',
        'productName' => 'getProductName',
        'productCode' => 'getProductCode'
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
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['allowedExportCountries'] = isset($data['allowedExportCountries']) ? $data['allowedExportCountries'] : null;
        $this->container['restrictedExportCountries'] = isset($data['restrictedExportCountries']) ? $data['restrictedExportCountries'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['productSKU'] = isset($data['productSKU']) ? $data['productSKU'] : null;
        $this->container['productRisk'] = isset($data['productRisk']) ? $data['productRisk'] : null;
        $this->container['productName'] = isset($data['productName']) ? $data['productName'] : null;
        $this->container['productCode'] = isset($data['productCode']) ? $data['productCode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['unitPrice'] === null) {
            $invalid_properties[] = "'unitPrice' can't be null";
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

        if ($this->container['unitPrice'] === null) {
            return false;
        }
        return true;
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
     * @param string $unitPrice Per-item price of the product. This value for this field cannot be negative.  You must include either this field or the request-level field `orderInformation.amountDetails.totalAmount` in your request.  You can include a decimal point (.), but you cannot include any other special characters. The value is truncated to the correct number of decimal places.  #### DCC with a Third-Party Provider Set this field to the converted amount that was returned by the DCC provider. You must include either the 1st line item in the order and this field, or the request-level field `orderInformation.amountDetails.totalAmount` in your request.  #### FDMS South If you accept IDR or CLP currencies, see the entry for FDMS South in the [Merchant Descriptors Using the SCMP API Guide.] (https://apps.cybersource.com/library/documentation/dev_guides/Merchant_Descriptors_SCMP_API/html/)  #### Tax Calculation Required field for U.S., Canadian, international and value added taxes.  #### Zero Amount Authorizations If your processor supports zero amount authorizations, you can set this field to 0 for the authorization to check if the card is lost or stolen.  #### Maximum Field Lengths For GPN and JCN Gateway: Decimal (10) All other processors: Decimal (15)
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets allowedExportCountries
     * @return string[]
     */
    public function getAllowedExportCountries()
    {
        return $this->container['allowedExportCountries'];
    }

    /**
     * Sets allowedExportCountries
     * @param string[] $allowedExportCountries
     * @return $this
     */
    public function setAllowedExportCountries($allowedExportCountries)
    {
        $this->container['allowedExportCountries'] = $allowedExportCountries;

        return $this;
    }

    /**
     * Gets restrictedExportCountries
     * @return string[]
     */
    public function getRestrictedExportCountries()
    {
        return $this->container['restrictedExportCountries'];
    }

    /**
     * Sets restrictedExportCountries
     * @param string[] $restrictedExportCountries
     * @return $this
     */
    public function setRestrictedExportCountries($restrictedExportCountries)
    {
        $this->container['restrictedExportCountries'] = $restrictedExportCountries;

        return $this;
    }

    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param int $quantity Number of units for this order. Must be a non-negative integer.  The default is `1`. For an authorization or capture transaction (`processingOptions.capture` is set to `true` or `false`), this field is required when `orderInformation.lineItems[].productCode` is not `default` or one of the other values related to shipping and/or handling.  #### Tax Calculation Optional field for U.S., Canadian, international tax, and value added taxes.
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets productSKU
     * @return string
     */
    public function getProductSKU()
    {
        return $this->container['productSKU'];
    }

    /**
     * Sets productSKU
     * @param string $productSKU Product identifier code. Also known as the Stock Keeping Unit (SKU) code for the product.  For an authorization or capture transaction (`processingOptions.capture` is set to `true` or `false`), this field is required when `orderInformation.lineItems[].productCode` is not set to **default** or one of the other values that are related to shipping and/or handling.  #### Tax Calculation Optional field for U.S. and Canadian taxes. Not applicable to international and value added taxes. For an authorization or capture transaction (`processingOptions.capture` is set to `true` or `false`), this field is required when `orderInformation.lineItems[].productCode` is not `default` or one of the values related to shipping and/or handling.
     * @return $this
     */
    public function setProductSKU($productSKU)
    {
        $this->container['productSKU'] = $productSKU;

        return $this;
    }

    /**
     * Gets productRisk
     * @return string
     */
    public function getProductRisk()
    {
        return $this->container['productRisk'];
    }

    /**
     * Sets productRisk
     * @param string $productRisk Indicates the level of risk for the product. This field can contain one of the following values: - `low`: The product is associated with few chargebacks. - `normal`: The product is associated with a normal number of chargebacks. - `high`: The product is associated with many chargebacks.
     * @return $this
     */
    public function setProductRisk($productRisk)
    {
        $this->container['productRisk'] = $productRisk;

        return $this;
    }

    /**
     * Gets productName
     * @return string
     */
    public function getProductName()
    {
        return $this->container['productName'];
    }

    /**
     * Sets productName
     * @param string $productName For an authorization or capture transaction (`processingOptions.capture` is `true` or `false`), this field is required when `orderInformation.lineItems[].productCode` is not `default` or one of the other values that are related to shipping and/or handling.  #### Tax Calculation Optional field for U.S., Canadian, international tax, and value added taxes.
     * @return $this
     */
    public function setProductName($productName)
    {
        $this->container['productName'] = $productName;

        return $this;
    }

    /**
     * Gets productCode
     * @return string
     */
    public function getProductCode()
    {
        return $this->container['productCode'];
    }

    /**
     * Sets productCode
     * @param string $productCode Type of product. The value for this field is used to identify the product category (electronic, handling, physical, service, or shipping). The default value is `default`.  If you are performing an authorization transaction (`processingOptions.capture` is set to `false`), and you set this field to a value other than `default` or one of the values related to shipping and/or handling, then `orderInformation.lineItems[].quantity`, `orderInformation.lineItems[].productName`, and `orderInformation.lineItems[].productSku` fields are required.  Optional field.  For details, see the `product_code` field description in the [Credit Card Services Using the SCMP API Guide](https://apps.cybersource.com/library/documentation/dev_guides/CC_Svcs_SCMP_API/html/).  #### Tax Calculation Optional field for U.S., Canadian, international tax, and value added taxes.  The Product Codes for the tax service are located in the Cybersource Tax Codes guide. Contact Customer Support to request the guide. If you don’t send a tax service Product Code in your tax request, product-based rules or exemptions will not be applied and the transaction will default to fully taxable in the locations where you’ve indicated you need to collect tax [by way of nexus, no nexus, or seller registration number fields].
     * @return $this
     */
    public function setProductCode($productCode)
    {
        $this->container['productCode'] = $productCode;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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
    #[\ReturnTypeWillChange]
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

