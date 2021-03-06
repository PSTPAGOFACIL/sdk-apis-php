<?php
/**
 * ResponseBodyGetTrxData
 *
 * PHP version 5
 *
 * @category Class
 * @package  PSTPagoFacil\ApiClient
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

namespace PSTPagoFacil\ApiClient\Model;

use \ArrayAccess;
use \PSTPagoFacil\ApiClient\ObjectSerializer;

/**
 * ResponseBodyGetTrxData Class Doc Comment
 *
 * @category Class
 * @package  PSTPagoFacil\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ResponseBodyGetTrxData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'responseBodyGetTrx_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'id_trx' => 'int',
        'id_service' => 'int',
        'order_id_tienda' => 'string',
        'amount' => 'float',
        'cost' => 'float',
        'email' => 'string',
        'auth_code' => 'int',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime',
        'callback_url' => 'string',
        'complete_url' => 'string',
        'cancel_url' => 'string',
        'ip' => 'string',
        'browser_data' => 'string',
        'source' => 'string',
        'timestamp' => 'string',
        'payment_type_code' => 'string',
        'shares_number' => 'int',
        'responce_code' => 'int',
        'vci' => 'string',
        'abonos' => 'string[]',
        'status' => '\PSTPagoFacil\ApiClient\Model\Status'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'id_trx' => null,
        'id_service' => null,
        'order_id_tienda' => null,
        'amount' => null,
        'cost' => null,
        'email' => 'email',
        'auth_code' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time',
        'callback_url' => null,
        'complete_url' => null,
        'cancel_url' => null,
        'ip' => null,
        'browser_data' => null,
        'source' => null,
        'timestamp' => null,
        'payment_type_code' => null,
        'shares_number' => null,
        'responce_code' => null,
        'vci' => null,
        'abonos' => null,
        'status' => null
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
        'id_trx' => 'idTrx',
        'id_service' => 'idService',
        'order_id_tienda' => 'orderIdTienda',
        'amount' => 'amount',
        'cost' => 'cost',
        'email' => 'email',
        'auth_code' => 'authCode',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt',
        'callback_url' => 'callbackURL',
        'complete_url' => 'completeURL',
        'cancel_url' => 'cancelURL',
        'ip' => 'ip',
        'browser_data' => 'browserData',
        'source' => 'source',
        'timestamp' => 'timestamp',
        'payment_type_code' => 'paymentTypeCode',
        'shares_number' => 'sharesNumber',
        'responce_code' => 'responceCode',
        'vci' => 'vci',
        'abonos' => 'abonos',
        'status' => 'status'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id_trx' => 'setIdTrx',
        'id_service' => 'setIdService',
        'order_id_tienda' => 'setOrderIdTienda',
        'amount' => 'setAmount',
        'cost' => 'setCost',
        'email' => 'setEmail',
        'auth_code' => 'setAuthCode',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'callback_url' => 'setCallbackUrl',
        'complete_url' => 'setCompleteUrl',
        'cancel_url' => 'setCancelUrl',
        'ip' => 'setIp',
        'browser_data' => 'setBrowserData',
        'source' => 'setSource',
        'timestamp' => 'setTimestamp',
        'payment_type_code' => 'setPaymentTypeCode',
        'shares_number' => 'setSharesNumber',
        'responce_code' => 'setResponceCode',
        'vci' => 'setVci',
        'abonos' => 'setAbonos',
        'status' => 'setStatus'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id_trx' => 'getIdTrx',
        'id_service' => 'getIdService',
        'order_id_tienda' => 'getOrderIdTienda',
        'amount' => 'getAmount',
        'cost' => 'getCost',
        'email' => 'getEmail',
        'auth_code' => 'getAuthCode',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'callback_url' => 'getCallbackUrl',
        'complete_url' => 'getCompleteUrl',
        'cancel_url' => 'getCancelUrl',
        'ip' => 'getIp',
        'browser_data' => 'getBrowserData',
        'source' => 'getSource',
        'timestamp' => 'getTimestamp',
        'payment_type_code' => 'getPaymentTypeCode',
        'shares_number' => 'getSharesNumber',
        'responce_code' => 'getResponceCode',
        'vci' => 'getVci',
        'abonos' => 'getAbonos',
        'status' => 'getStatus'
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
        $this->container['id_trx'] = isset($data['id_trx']) ? $data['id_trx'] : null;
        $this->container['id_service'] = isset($data['id_service']) ? $data['id_service'] : null;
        $this->container['order_id_tienda'] = isset($data['order_id_tienda']) ? $data['order_id_tienda'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['auth_code'] = isset($data['auth_code']) ? $data['auth_code'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['callback_url'] = isset($data['callback_url']) ? $data['callback_url'] : null;
        $this->container['complete_url'] = isset($data['complete_url']) ? $data['complete_url'] : null;
        $this->container['cancel_url'] = isset($data['cancel_url']) ? $data['cancel_url'] : null;
        $this->container['ip'] = isset($data['ip']) ? $data['ip'] : null;
        $this->container['browser_data'] = isset($data['browser_data']) ? $data['browser_data'] : null;
        $this->container['source'] = isset($data['source']) ? $data['source'] : null;
        $this->container['timestamp'] = isset($data['timestamp']) ? $data['timestamp'] : null;
        $this->container['payment_type_code'] = isset($data['payment_type_code']) ? $data['payment_type_code'] : null;
        $this->container['shares_number'] = isset($data['shares_number']) ? $data['shares_number'] : null;
        $this->container['responce_code'] = isset($data['responce_code']) ? $data['responce_code'] : null;
        $this->container['vci'] = isset($data['vci']) ? $data['vci'] : null;
        $this->container['abonos'] = isset($data['abonos']) ? $data['abonos'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['email']) && !preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,4}$/", $this->container['email'])) {
            $invalidProperties[] = "invalid value for 'email', must be conform to the pattern /^[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,4}$/.";
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
     * Gets id_trx
     *
     * @return int|null
     */
    public function getIdTrx()
    {
        return $this->container['id_trx'];
    }

    /**
     * Sets id_trx
     *
     * @param int|null $id_trx ID de la transacción en Pago Fácil
     *
     * @return $this
     */
    public function setIdTrx($id_trx)
    {
        $this->container['id_trx'] = $id_trx;

        return $this;
    }

    /**
     * Gets id_service
     *
     * @return int|null
     */
    public function getIdService()
    {
        return $this->container['id_service'];
    }

    /**
     * Sets id_service
     *
     * @param int|null $id_service ID del servicio
     *
     * @return $this
     */
    public function setIdService($id_service)
    {
        $this->container['id_service'] = $id_service;

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
     * @param string|null $order_id_tienda ID del comercio para identificar su tienda
     *
     * @return $this
     */
    public function setOrderIdTienda($order_id_tienda)
    {
        $this->container['order_id_tienda'] = $order_id_tienda;

        return $this;
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
     * @param float|null $amount Monto de la transacción
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
     * @param float|null $cost Costo de la transacción
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email Email
     *
     * @return $this
     */
    public function setEmail($email)
    {

        if (!is_null($email) && (!preg_match("/^[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,4}$/", $email))) {
            throw new \InvalidArgumentException("invalid value for $email when calling ResponseBodyGetTrxData., must conform to the pattern /^[a-z0-9._%+-]+@[a-z0-9.-]+\\.[a-z]{2,4}$/.");
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return int|null
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param int|null $auth_code Codigo de autorizacion de la compra
     *
     * @return $this
     */
    public function setAuthCode($auth_code)
    {
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at Fecha de creación
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at Fecha de actualización
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets callback_url
     *
     * @return string|null
     */
    public function getCallbackUrl()
    {
        return $this->container['callback_url'];
    }

    /**
     * Sets callback_url
     *
     * @param string|null $callback_url url a la que se llama una vez la transacción es completada
     *
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        $this->container['callback_url'] = $callback_url;

        return $this;
    }

    /**
     * Gets complete_url
     *
     * @return string|null
     */
    public function getCompleteUrl()
    {
        return $this->container['complete_url'];
    }

    /**
     * Sets complete_url
     *
     * @param string|null $complete_url url a la que se redireciona al cliente una vez la transacción es completada
     *
     * @return $this
     */
    public function setCompleteUrl($complete_url)
    {
        $this->container['complete_url'] = $complete_url;

        return $this;
    }

    /**
     * Gets cancel_url
     *
     * @return string|null
     */
    public function getCancelUrl()
    {
        return $this->container['cancel_url'];
    }

    /**
     * Sets cancel_url
     *
     * @param string|null $cancel_url currently out of order
     *
     * @return $this
     */
    public function setCancelUrl($cancel_url)
    {
        $this->container['cancel_url'] = $cancel_url;

        return $this;
    }

    /**
     * Gets ip
     *
     * @return string|null
     */
    public function getIp()
    {
        return $this->container['ip'];
    }

    /**
     * Sets ip
     *
     * @param string|null $ip ip adress of the device from where transaction was completed
     *
     * @return $this
     */
    public function setIp($ip)
    {
        $this->container['ip'] = $ip;

        return $this;
    }

    /**
     * Gets browser_data
     *
     * @return string|null
     */
    public function getBrowserData()
    {
        return $this->container['browser_data'];
    }

    /**
     * Sets browser_data
     *
     * @param string|null $browser_data data from the browser where the transaction was completed
     *
     * @return $this
     */
    public function setBrowserData($browser_data)
    {
        $this->container['browser_data'] = $browser_data;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source Método de pago
     *
     * @return $this
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets timestamp
     *
     * @return string|null
     */
    public function getTimestamp()
    {
        return $this->container['timestamp'];
    }

    /**
     * Sets timestamp
     *
     * @param string|null $timestamp uso transbank
     *
     * @return $this
     */
    public function setTimestamp($timestamp)
    {
        $this->container['timestamp'] = $timestamp;

        return $this;
    }

    /**
     * Gets payment_type_code
     *
     * @return string|null
     */
    public function getPaymentTypeCode()
    {
        return $this->container['payment_type_code'];
    }

    /**
     * Sets payment_type_code
     *
     * @param string|null $payment_type_code Forma de pago que usa el cliente
     *
     * @return $this
     */
    public function setPaymentTypeCode($payment_type_code)
    {
        $this->container['payment_type_code'] = $payment_type_code;

        return $this;
    }

    /**
     * Gets shares_number
     *
     * @return int|null
     */
    public function getSharesNumber()
    {
        return $this->container['shares_number'];
    }

    /**
     * Sets shares_number
     *
     * @param int|null $shares_number Cuotas de la transacción
     *
     * @return $this
     */
    public function setSharesNumber($shares_number)
    {
        $this->container['shares_number'] = $shares_number;

        return $this;
    }

    /**
     * Gets responce_code
     *
     * @return int|null
     */
    public function getResponceCode()
    {
        return $this->container['responce_code'];
    }

    /**
     * Sets responce_code
     *
     * @param int|null $responce_code uso transbank
     *
     * @return $this
     */
    public function setResponceCode($responce_code)
    {
        $this->container['responce_code'] = $responce_code;

        return $this;
    }

    /**
     * Gets vci
     *
     * @return string|null
     */
    public function getVci()
    {
        return $this->container['vci'];
    }

    /**
     * Sets vci
     *
     * @param string|null $vci uso transbank
     *
     * @return $this
     */
    public function setVci($vci)
    {
        $this->container['vci'] = $vci;

        return $this;
    }

    /**
     * Gets abonos
     *
     * @return string[]|null
     */
    public function getAbonos()
    {
        return $this->container['abonos'];
    }

    /**
     * Sets abonos
     *
     * @param string[]|null $abonos Abonos relacionados a la transacción
     *
     * @return $this
     */
    public function setAbonos($abonos)
    {
        $this->container['abonos'] = $abonos;

        return $this;
    }

    /**
     * Gets status
     *
     * @return \PSTPagoFacil\ApiClient\Model\Status|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \PSTPagoFacil\ApiClient\Model\Status|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

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


