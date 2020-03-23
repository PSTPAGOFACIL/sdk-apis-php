<?php
/**
 * RequestBodyTrx
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * API Pago Facil
 *
 * API de Pago Fácil
 *
 * OpenAPI spec version: 2.1.5
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.18
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
 * RequestBodyTrx Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequestBodyTrx implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'requestBodyTrx';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'x_account_id' => '\Swagger\Client\Model\XAccountId',
'x_amount' => '\Swagger\Client\Model\XAmount',
'x_currency' => '\Swagger\Client\Model\Currency',
'x_reference' => '\Swagger\Client\Model\XReference',
'x_customer_email' => '\Swagger\Client\Model\XCustomerEmail',
'x_url_complete' => '\Swagger\Client\Model\XUrlComplete',
'x_url_callback' => '\Swagger\Client\Model\XUrlCallback',
'x_url_cancel' => '\Swagger\Client\Model\XUrlCancel',
'x_shop_country' => '\Swagger\Client\Model\XShopCountry',
'x_session_id' => '\Swagger\Client\Model\XSessionId',
'x_products' => '\Swagger\Client\Model\Products',
'x_billing_details' => '\Swagger\Client\Model\BillingDetails',
'x_shippment' => '\Swagger\Client\Model\Shippment',
'x_document' => '\Swagger\Client\Model\Document',
'x_signature' => '\Swagger\Client\Model\XSignature'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'x_account_id' => null,
'x_amount' => null,
'x_currency' => null,
'x_reference' => null,
'x_customer_email' => null,
'x_url_complete' => null,
'x_url_callback' => null,
'x_url_cancel' => null,
'x_shop_country' => null,
'x_session_id' => null,
'x_products' => null,
'x_billing_details' => null,
'x_shippment' => null,
'x_document' => null,
'x_signature' => null    ];

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
        'x_account_id' => 'x_account_id',
'x_amount' => 'x_amount',
'x_currency' => 'x_currency',
'x_reference' => 'x_reference',
'x_customer_email' => 'x_customer_email',
'x_url_complete' => 'x_url_complete',
'x_url_callback' => 'x_url_callback',
'x_url_cancel' => 'x_url_cancel',
'x_shop_country' => 'x_shop_country',
'x_session_id' => 'x_session_id',
'x_products' => 'x_products',
'x_billing_details' => 'x_billing_details',
'x_shippment' => 'x_shippment',
'x_document' => 'x_document',
'x_signature' => 'x_signature'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'x_account_id' => 'setXAccountId',
'x_amount' => 'setXAmount',
'x_currency' => 'setXCurrency',
'x_reference' => 'setXReference',
'x_customer_email' => 'setXCustomerEmail',
'x_url_complete' => 'setXUrlComplete',
'x_url_callback' => 'setXUrlCallback',
'x_url_cancel' => 'setXUrlCancel',
'x_shop_country' => 'setXShopCountry',
'x_session_id' => 'setXSessionId',
'x_products' => 'setXProducts',
'x_billing_details' => 'setXBillingDetails',
'x_shippment' => 'setXShippment',
'x_document' => 'setXDocument',
'x_signature' => 'setXSignature'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'x_account_id' => 'getXAccountId',
'x_amount' => 'getXAmount',
'x_currency' => 'getXCurrency',
'x_reference' => 'getXReference',
'x_customer_email' => 'getXCustomerEmail',
'x_url_complete' => 'getXUrlComplete',
'x_url_callback' => 'getXUrlCallback',
'x_url_cancel' => 'getXUrlCancel',
'x_shop_country' => 'getXShopCountry',
'x_session_id' => 'getXSessionId',
'x_products' => 'getXProducts',
'x_billing_details' => 'getXBillingDetails',
'x_shippment' => 'getXShippment',
'x_document' => 'getXDocument',
'x_signature' => 'getXSignature'    ];

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
        $this->container['x_account_id'] = isset($data['x_account_id']) ? $data['x_account_id'] : null;
        $this->container['x_amount'] = isset($data['x_amount']) ? $data['x_amount'] : null;
        $this->container['x_currency'] = isset($data['x_currency']) ? $data['x_currency'] : null;
        $this->container['x_reference'] = isset($data['x_reference']) ? $data['x_reference'] : null;
        $this->container['x_customer_email'] = isset($data['x_customer_email']) ? $data['x_customer_email'] : null;
        $this->container['x_url_complete'] = isset($data['x_url_complete']) ? $data['x_url_complete'] : null;
        $this->container['x_url_callback'] = isset($data['x_url_callback']) ? $data['x_url_callback'] : null;
        $this->container['x_url_cancel'] = isset($data['x_url_cancel']) ? $data['x_url_cancel'] : null;
        $this->container['x_shop_country'] = isset($data['x_shop_country']) ? $data['x_shop_country'] : null;
        $this->container['x_session_id'] = isset($data['x_session_id']) ? $data['x_session_id'] : null;
        $this->container['x_products'] = isset($data['x_products']) ? $data['x_products'] : null;
        $this->container['x_billing_details'] = isset($data['x_billing_details']) ? $data['x_billing_details'] : null;
        $this->container['x_shippment'] = isset($data['x_shippment']) ? $data['x_shippment'] : null;
        $this->container['x_document'] = isset($data['x_document']) ? $data['x_document'] : null;
        $this->container['x_signature'] = isset($data['x_signature']) ? $data['x_signature'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['x_account_id'] === null) {
            $invalidProperties[] = "'x_account_id' can't be null";
        }
        if ($this->container['x_amount'] === null) {
            $invalidProperties[] = "'x_amount' can't be null";
        }
        if ($this->container['x_currency'] === null) {
            $invalidProperties[] = "'x_currency' can't be null";
        }
        if ($this->container['x_reference'] === null) {
            $invalidProperties[] = "'x_reference' can't be null";
        }
        if ($this->container['x_customer_email'] === null) {
            $invalidProperties[] = "'x_customer_email' can't be null";
        }
        if ($this->container['x_url_complete'] === null) {
            $invalidProperties[] = "'x_url_complete' can't be null";
        }
        if ($this->container['x_url_callback'] === null) {
            $invalidProperties[] = "'x_url_callback' can't be null";
        }
        if ($this->container['x_url_cancel'] === null) {
            $invalidProperties[] = "'x_url_cancel' can't be null";
        }
        if ($this->container['x_shop_country'] === null) {
            $invalidProperties[] = "'x_shop_country' can't be null";
        }
        if ($this->container['x_session_id'] === null) {
            $invalidProperties[] = "'x_session_id' can't be null";
        }
        if ($this->container['x_signature'] === null) {
            $invalidProperties[] = "'x_signature' can't be null";
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
     * Gets x_account_id
     *
     * @return \Swagger\Client\Model\XAccountId
     */
    public function getXAccountId()
    {
        return $this->container['x_account_id'];
    }

    /**
     * Sets x_account_id
     *
     * @param \Swagger\Client\Model\XAccountId $x_account_id x_account_id
     *
     * @return $this
     */
    public function setXAccountId($x_account_id)
    {
        $this->container['x_account_id'] = $x_account_id;

        return $this;
    }

    /**
     * Gets x_amount
     *
     * @return \Swagger\Client\Model\XAmount
     */
    public function getXAmount()
    {
        return $this->container['x_amount'];
    }

    /**
     * Sets x_amount
     *
     * @param \Swagger\Client\Model\XAmount $x_amount x_amount
     *
     * @return $this
     */
    public function setXAmount($x_amount)
    {
        $this->container['x_amount'] = $x_amount;

        return $this;
    }

    /**
     * Gets x_currency
     *
     * @return \Swagger\Client\Model\Currency
     */
    public function getXCurrency()
    {
        return $this->container['x_currency'];
    }

    /**
     * Sets x_currency
     *
     * @param \Swagger\Client\Model\Currency $x_currency x_currency
     *
     * @return $this
     */
    public function setXCurrency($x_currency)
    {
        $this->container['x_currency'] = $x_currency;

        return $this;
    }

    /**
     * Gets x_reference
     *
     * @return \Swagger\Client\Model\XReference
     */
    public function getXReference()
    {
        return $this->container['x_reference'];
    }

    /**
     * Sets x_reference
     *
     * @param \Swagger\Client\Model\XReference $x_reference x_reference
     *
     * @return $this
     */
    public function setXReference($x_reference)
    {
        $this->container['x_reference'] = $x_reference;

        return $this;
    }

    /**
     * Gets x_customer_email
     *
     * @return \Swagger\Client\Model\XCustomerEmail
     */
    public function getXCustomerEmail()
    {
        return $this->container['x_customer_email'];
    }

    /**
     * Sets x_customer_email
     *
     * @param \Swagger\Client\Model\XCustomerEmail $x_customer_email x_customer_email
     *
     * @return $this
     */
    public function setXCustomerEmail($x_customer_email)
    {
        $this->container['x_customer_email'] = $x_customer_email;

        return $this;
    }

    /**
     * Gets x_url_complete
     *
     * @return \Swagger\Client\Model\XUrlComplete
     */
    public function getXUrlComplete()
    {
        return $this->container['x_url_complete'];
    }

    /**
     * Sets x_url_complete
     *
     * @param \Swagger\Client\Model\XUrlComplete $x_url_complete x_url_complete
     *
     * @return $this
     */
    public function setXUrlComplete($x_url_complete)
    {
        $this->container['x_url_complete'] = $x_url_complete;

        return $this;
    }

    /**
     * Gets x_url_callback
     *
     * @return \Swagger\Client\Model\XUrlCallback
     */
    public function getXUrlCallback()
    {
        return $this->container['x_url_callback'];
    }

    /**
     * Sets x_url_callback
     *
     * @param \Swagger\Client\Model\XUrlCallback $x_url_callback x_url_callback
     *
     * @return $this
     */
    public function setXUrlCallback($x_url_callback)
    {
        $this->container['x_url_callback'] = $x_url_callback;

        return $this;
    }

    /**
     * Gets x_url_cancel
     *
     * @return \Swagger\Client\Model\XUrlCancel
     */
    public function getXUrlCancel()
    {
        return $this->container['x_url_cancel'];
    }

    /**
     * Sets x_url_cancel
     *
     * @param \Swagger\Client\Model\XUrlCancel $x_url_cancel x_url_cancel
     *
     * @return $this
     */
    public function setXUrlCancel($x_url_cancel)
    {
        $this->container['x_url_cancel'] = $x_url_cancel;

        return $this;
    }

    /**
     * Gets x_shop_country
     *
     * @return \Swagger\Client\Model\XShopCountry
     */
    public function getXShopCountry()
    {
        return $this->container['x_shop_country'];
    }

    /**
     * Sets x_shop_country
     *
     * @param \Swagger\Client\Model\XShopCountry $x_shop_country x_shop_country
     *
     * @return $this
     */
    public function setXShopCountry($x_shop_country)
    {
        $this->container['x_shop_country'] = $x_shop_country;

        return $this;
    }

    /**
     * Gets x_session_id
     *
     * @return \Swagger\Client\Model\XSessionId
     */
    public function getXSessionId()
    {
        return $this->container['x_session_id'];
    }

    /**
     * Sets x_session_id
     *
     * @param \Swagger\Client\Model\XSessionId $x_session_id x_session_id
     *
     * @return $this
     */
    public function setXSessionId($x_session_id)
    {
        $this->container['x_session_id'] = $x_session_id;

        return $this;
    }

    /**
     * Gets x_products
     *
     * @return \Swagger\Client\Model\Products
     */
    public function getXProducts()
    {
        return $this->container['x_products'];
    }

    /**
     * Sets x_products
     *
     * @param \Swagger\Client\Model\Products $x_products x_products
     *
     * @return $this
     */
    public function setXProducts($x_products)
    {
        $this->container['x_products'] = $x_products;

        return $this;
    }

    /**
     * Gets x_billing_details
     *
     * @return \Swagger\Client\Model\BillingDetails
     */
    public function getXBillingDetails()
    {
        return $this->container['x_billing_details'];
    }

    /**
     * Sets x_billing_details
     *
     * @param \Swagger\Client\Model\BillingDetails $x_billing_details x_billing_details
     *
     * @return $this
     */
    public function setXBillingDetails($x_billing_details)
    {
        $this->container['x_billing_details'] = $x_billing_details;

        return $this;
    }

    /**
     * Gets x_shippment
     *
     * @return \Swagger\Client\Model\Shippment
     */
    public function getXShippment()
    {
        return $this->container['x_shippment'];
    }

    /**
     * Sets x_shippment
     *
     * @param \Swagger\Client\Model\Shippment $x_shippment x_shippment
     *
     * @return $this
     */
    public function setXShippment($x_shippment)
    {
        $this->container['x_shippment'] = $x_shippment;

        return $this;
    }

    /**
     * Gets x_document
     *
     * @return \Swagger\Client\Model\Document
     */
    public function getXDocument()
    {
        return $this->container['x_document'];
    }

    /**
     * Sets x_document
     *
     * @param \Swagger\Client\Model\Document $x_document x_document
     *
     * @return $this
     */
    public function setXDocument($x_document)
    {
        $this->container['x_document'] = $x_document;

        return $this;
    }

    /**
     * Gets x_signature
     *
     * @return \Swagger\Client\Model\XSignature
     */
    public function getXSignature()
    {
        return $this->container['x_signature'];
    }

    /**
     * Sets x_signature
     *
     * @param \Swagger\Client\Model\XSignature $x_signature x_signature
     *
     * @return $this
     */
    public function setXSignature($x_signature)
    {
        $this->container['x_signature'] = $x_signature;

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
