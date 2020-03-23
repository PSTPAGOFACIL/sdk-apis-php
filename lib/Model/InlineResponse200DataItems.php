<?php
/**
 * InlineResponse200DataItems
 *
 * PHP version 5
 *
 * @category Class
 * @package  PSTPAGOFACIL\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Pago Facil
 *
 * API de Pago Fácil
 *
 * The version of the OpenAPI document: 2.1.5
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace PSTPAGOFACIL\ApiClient\Model;

use \ArrayAccess;
use \PSTPAGOFACIL\ApiClient\ObjectSerializer;

/**
 * InlineResponse200DataItems Class Doc Comment
 *
 * @category Class
 * @package  PSTPAGOFACIL\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse200DataItems implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_data_items';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'amount' => 'float',
        'cost' => 'float',
        'total' => 'float',
        'id_trx' => 'float',
        'order_id_tienda' => 'string',
        'created_at' => 'int',
        'date_time_created_at' => '\DateTime',
        'is_total_nullified' => 'bool',
        'is_parcial_nullified' => 'bool',
        'currency' => 'string',
        'document' => '\PSTPAGOFACIL\ApiClient\Model\InlineResponse200DataDocument'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'amount' => null,
        'cost' => null,
        'total' => null,
        'id_trx' => null,
        'order_id_tienda' => null,
        'created_at' => null,
        'date_time_created_at' => 'date-time',
        'is_total_nullified' => null,
        'is_parcial_nullified' => null,
        'currency' => null,
        'document' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'cost' => 'cost',
        'total' => 'total',
        'id_trx' => 'idTrx',
        'order_id_tienda' => 'order_id_tienda',
        'created_at' => 'createdAt',
        'date_time_created_at' => 'dateTimeCreatedAt',
        'is_total_nullified' => 'isTotalNullified',
        'is_parcial_nullified' => 'isParcialNullified',
        'currency' => 'currency',
        'document' => 'document'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'cost' => 'setCost',
        'total' => 'setTotal',
        'id_trx' => 'setIdTrx',
        'order_id_tienda' => 'setOrderIdTienda',
        'created_at' => 'setCreatedAt',
        'date_time_created_at' => 'setDateTimeCreatedAt',
        'is_total_nullified' => 'setIsTotalNullified',
        'is_parcial_nullified' => 'setIsParcialNullified',
        'currency' => 'setCurrency',
        'document' => 'setDocument'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'cost' => 'getCost',
        'total' => 'getTotal',
        'id_trx' => 'getIdTrx',
        'order_id_tienda' => 'getOrderIdTienda',
        'created_at' => 'getCreatedAt',
        'date_time_created_at' => 'getDateTimeCreatedAt',
        'is_total_nullified' => 'getIsTotalNullified',
        'is_parcial_nullified' => 'getIsParcialNullified',
        'currency' => 'getCurrency',
        'document' => 'getDocument'
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
        return self::$openAPIModelName;
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['id_trx'] = isset($data['id_trx']) ? $data['id_trx'] : null;
        $this->container['order_id_tienda'] = isset($data['order_id_tienda']) ? $data['order_id_tienda'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['date_time_created_at'] = isset($data['date_time_created_at']) ? $data['date_time_created_at'] : null;
        $this->container['is_total_nullified'] = isset($data['is_total_nullified']) ? $data['is_total_nullified'] : null;
        $this->container['is_parcial_nullified'] = isset($data['is_parcial_nullified']) ? $data['is_parcial_nullified'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['document'] = isset($data['document']) ? $data['document'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets amount
     *
     * @return float|null
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param float|null $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return float|null
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param float|null $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets total
     *
     * @return float|null
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param float|null $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets id_trx
     *
     * @return float|null
     */
    public function getIdTrx()
    {
        return $this->container['id_trx'];
    }

    /**
     * Sets id_trx
     *
     * @param float|null $id_trx id_trx
     *
     * @return $this
     */
    public function setIdTrx($id_trx)
    {
        $this->container['id_trx'] = $id_trx;

        return $this;
    }

    /**
     * Gets order_id_tienda
     *
     * @return string|null
     */
    public function getOrderIdTienda()
    {
        return $this->container['order_id_tienda'];
    }

    /**
     * Sets order_id_tienda
     *
     * @param string|null $order_id_tienda order_id_tienda
     *
     * @return $this
     */
    public function setOrderIdTienda($order_id_tienda)
    {
        $this->container['order_id_tienda'] = $order_id_tienda;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int|null $created_at Timestamp de unix en milisegundos
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets date_time_created_at
     *
     * @return \DateTime|null
     */
    public function getDateTimeCreatedAt()
    {
        return $this->container['date_time_created_at'];
    }

    /**
     * Sets date_time_created_at
     *
     * @param \DateTime|null $date_time_created_at date_time_created_at
     *
     * @return $this
     */
    public function setDateTimeCreatedAt($date_time_created_at)
    {
        $this->container['date_time_created_at'] = $date_time_created_at;

        return $this;
    }

    /**
     * Gets is_total_nullified
     *
     * @return bool|null
     */
    public function getIsTotalNullified()
    {
        return $this->container['is_total_nullified'];
    }

    /**
     * Sets is_total_nullified
     *
     * @param bool|null $is_total_nullified is_total_nullified
     *
     * @return $this
     */
    public function setIsTotalNullified($is_total_nullified)
    {
        $this->container['is_total_nullified'] = $is_total_nullified;

        return $this;
    }

    /**
     * Gets is_parcial_nullified
     *
     * @return bool|null
     */
    public function getIsParcialNullified()
    {
        return $this->container['is_parcial_nullified'];
    }

    /**
     * Sets is_parcial_nullified
     *
     * @param bool|null $is_parcial_nullified is_parcial_nullified
     *
     * @return $this
     */
    public function setIsParcialNullified($is_parcial_nullified)
    {
        $this->container['is_parcial_nullified'] = $is_parcial_nullified;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets document
     *
     * @return \PSTPAGOFACIL\ApiClient\Model\InlineResponse200DataDocument|null
     */
    public function getDocument()
    {
        return $this->container['document'];
    }

    /**
     * Sets document
     *
     * @param \PSTPAGOFACIL\ApiClient\Model\InlineResponse200DataDocument|null $document document
     *
     * @return $this
     */
    public function setDocument($document)
    {
        $this->container['document'] = $document;

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


