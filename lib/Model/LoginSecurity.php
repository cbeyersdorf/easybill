<?php
/**
 * LoginSecurity
 *
 * PHP version 5
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * easybill REST API
 *
 * The first version of the easybill REST API. [CHANGELOG](https://api.easybill.de/rest/v1/CHANGELOG.md)  ## Authentication  You can choose between two available methods: `Basic Auth` or `Bearer Token`.  In each HTTP request, one of the following HTTP headers is required:  ``` # Basic Auth Authorization: Basic base64_encode('<email>:<api_key>') # Bearer Token Authorization: Bearer <api_key> ```  ## Limitations  ### Request Limit  * PLUS: 10 requests per minute * BUSINESS: 60 requests per minute  If the limit is exceeded, you will receive the HTTP error: `429 Too Many Requests`  ### Result Limit  All result lists are limited to 100 by default. This limit can be increased by the query parameter `limit` to a maximum of 1000.  ## Query filter  Many list resources can be filtered. In `/documents` you can filter e.g. by number with `/documents?number=111028654`. If you want to filter multiple numbers, you can either enter them separated by commas `/documents?number=111028654,222006895` or as an array `/documents?number[]=111028654&number[]=222006895`.  **Warning**: The maximum size of an HTTP request line in bytes is 4094. If this limit is exceeded, you will receive the HTTP error: `414 Request-URI Too Large`  ### Escape commas in query  You can escape commans in query `name=Patrick\\, Peter` if you submit the header `X-Easybill-Escape: true` in your request.  ## Property login_id  This is the login of your admin or employee account.  ## Date and Date-Time format Please use the timezone `Europe/Berlin`. * **date** = *Y-m-d* = `2016-12-31` * **date-time** = *Y-m-d H:i:s* = `2016-12-31 03:13:37`  Date or datetime can be `null` because the attributes have been added later and the entry is older.
 *
 * OpenAPI spec version: 1.63.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace cbeyersdorf\easybill\Model;

use \ArrayAccess;
use \cbeyersdorf\easybill\ObjectSerializer;

/**
 * LoginSecurity Class Doc Comment
 *
 * @category Class
 * @description This object is only displayed if your request the login resource as an admin. Otherwise this property will be null.
 * @package  cbeyersdorf\easybill
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LoginSecurity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LoginSecurity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'two_factor_enabled' => 'bool',
        'recovery_codes_enabled' => 'bool',
        'notify_on_new_login_enabled' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'two_factor_enabled' => null,
        'recovery_codes_enabled' => null,
        'notify_on_new_login_enabled' => null
    ];

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
        'two_factor_enabled' => 'two_factor_enabled',
        'recovery_codes_enabled' => 'recovery_codes_enabled',
        'notify_on_new_login_enabled' => 'notify_on_new_login_enabled'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'two_factor_enabled' => 'setTwoFactorEnabled',
        'recovery_codes_enabled' => 'setRecoveryCodesEnabled',
        'notify_on_new_login_enabled' => 'setNotifyOnNewLoginEnabled'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'two_factor_enabled' => 'getTwoFactorEnabled',
        'recovery_codes_enabled' => 'getRecoveryCodesEnabled',
        'notify_on_new_login_enabled' => 'getNotifyOnNewLoginEnabled'
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
        $this->container['two_factor_enabled'] = isset($data['two_factor_enabled']) ? $data['two_factor_enabled'] : false;
        $this->container['recovery_codes_enabled'] = isset($data['recovery_codes_enabled']) ? $data['recovery_codes_enabled'] : false;
        $this->container['notify_on_new_login_enabled'] = isset($data['notify_on_new_login_enabled']) ? $data['notify_on_new_login_enabled'] : true;
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
     * Gets two_factor_enabled
     *
     * @return bool
     */
    public function getTwoFactorEnabled()
    {
        return $this->container['two_factor_enabled'];
    }

    /**
     * Sets two_factor_enabled
     *
     * @param bool $two_factor_enabled Shows if the login has two factor enabled for the login process
     *
     * @return $this
     */
    public function setTwoFactorEnabled($two_factor_enabled)
    {
        $this->container['two_factor_enabled'] = $two_factor_enabled;

        return $this;
    }

    /**
     * Gets recovery_codes_enabled
     *
     * @return bool
     */
    public function getRecoveryCodesEnabled()
    {
        return $this->container['recovery_codes_enabled'];
    }

    /**
     * Sets recovery_codes_enabled
     *
     * @param bool $recovery_codes_enabled Shows if the login has recovery codes enabled to bypass two factor
     *
     * @return $this
     */
    public function setRecoveryCodesEnabled($recovery_codes_enabled)
    {
        $this->container['recovery_codes_enabled'] = $recovery_codes_enabled;

        return $this;
    }

    /**
     * Gets notify_on_new_login_enabled
     *
     * @return bool
     */
    public function getNotifyOnNewLoginEnabled()
    {
        return $this->container['notify_on_new_login_enabled'];
    }

    /**
     * Sets notify_on_new_login_enabled
     *
     * @param bool $notify_on_new_login_enabled Shows if the login has enabled to be notified if a new login is made from an unknown device.
     *
     * @return $this
     */
    public function setNotifyOnNewLoginEnabled($notify_on_new_login_enabled)
    {
        $this->container['notify_on_new_login_enabled'] = $notify_on_new_login_enabled;

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


