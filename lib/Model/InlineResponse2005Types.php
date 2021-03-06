<?php
/**
 * InlineResponse2005Types
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
 * InlineResponse2005Types Class Doc Comment
 *
 * @category Class
 * @package  PSTPagoFacil\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class InlineResponse2005Types implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'inline_response_200_5_types';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'codigo' => 'string',
        'nombre' => 'string',
        'descripcion' => 'string',
        'url_imagen' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'codigo' => null,
        'nombre' => null,
        'descripcion' => null,
        'url_imagen' => null
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
        'codigo' => 'codigo',
        'nombre' => 'nombre',
        'descripcion' => 'descripcion',
        'url_imagen' => 'url_imagen'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'codigo' => 'setCodigo',
        'nombre' => 'setNombre',
        'descripcion' => 'setDescripcion',
        'url_imagen' => 'setUrlImagen'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'codigo' => 'getCodigo',
        'nombre' => 'getNombre',
        'descripcion' => 'getDescripcion',
        'url_imagen' => 'getUrlImagen'
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
        $this->container['codigo'] = isset($data['codigo']) ? $data['codigo'] : null;
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['descripcion'] = isset($data['descripcion']) ? $data['descripcion'] : null;
        $this->container['url_imagen'] = isset($data['url_imagen']) ? $data['url_imagen'] : null;
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
     * Gets codigo
     *
     * @return string|null
     */
    public function getCodigo()
    {
        return $this->container['codigo'];
    }

    /**
     * Sets codigo
     *
     * @param string|null $codigo codigo
     *
     * @return $this
     */
    public function setCodigo($codigo)
    {
        $this->container['codigo'] = $codigo;

        return $this;
    }

    /**
     * Gets nombre
     *
     * @return string|null
     */
    public function getNombre()
    {
        return $this->container['nombre'];
    }

    /**
     * Sets nombre
     *
     * @param string|null $nombre nombre
     *
     * @return $this
     */
    public function setNombre($nombre)
    {
        $this->container['nombre'] = $nombre;

        return $this;
    }

    /**
     * Gets descripcion
     *
     * @return string|null
     */
    public function getDescripcion()
    {
        return $this->container['descripcion'];
    }

    /**
     * Sets descripcion
     *
     * @param string|null $descripcion descripcion
     *
     * @return $this
     */
    public function setDescripcion($descripcion)
    {
        $this->container['descripcion'] = $descripcion;

        return $this;
    }

    /**
     * Gets url_imagen
     *
     * @return string|null
     */
    public function getUrlImagen()
    {
        return $this->container['url_imagen'];
    }

    /**
     * Sets url_imagen
     *
     * @param string|null $url_imagen url_imagen
     *
     * @return $this
     */
    public function setUrlImagen($url_imagen)
    {
        $this->container['url_imagen'] = $url_imagen;

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


