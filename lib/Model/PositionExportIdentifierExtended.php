<?php
/**
 * PositionExportIdentifierExtended
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * easybill REST API
 *
 * The first version of the easybill REST API. [CHANGELOG](https://api.easybill.de/rest/v1/CHANGELOG.md)  ## Authentication  You can choose between two available methods: `Basic Auth` or `Bearer Token`.  In each HTTP request, one of the following HTTP headers is required:  ``` # Basic Auth Authorization: Basic base64_encode('<email>:<api_key>') # Bearer Token Authorization: Bearer <api_key> ```  ## Limitations  ### Request Limit  * PLUS: 10 requests per minute * BUSINESS: 60 requests per minute  If the limit is exceeded, you will receive the HTTP error: `429 Too Many Requests`  ### Result Limit  All result lists are limited to 100 by default. This limit can be increased by the query parameter `limit` to a maximum of 1000.  ## Query filter  Many list resources can be filtered. In `/documents` you can filter e.g. by number with `/documents?number=111028654`. If you want to filter multiple numbers, you can either enter them separated by commas `/documents?number=111028654,222006895` or as an array `/documents?number[]=111028654&number[]=222006895`.  **Warning**: The maximum size of an HTTP request line in bytes is 4094. If this limit is exceeded, you will receive the HTTP error: `414 Request-URI Too Large`  ### Escape commas in query  You can escape commans in query `name=Patrick\\, Peter` if you submit the header `X-Easybill-Escape: true` in your request.  ## Property login_id  This is the login of your admin or employee account.  ## Date and Date-Time format Please use the timezone `Europe/Berlin`. * **date** = *Y-m-d* = `2016-12-31` * **date-time** = *Y-m-d H:i:s* = `2016-12-31 03:13:37`  Date or datetime can be `null` because the attributes have been added later and the entry is older.
 *
 * The version of the OpenAPI document: 1.82.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.0.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace cbeyersdorf\easybill\Model;

use \ArrayAccess;
use \cbeyersdorf\easybill\ObjectSerializer;

/**
 * PositionExportIdentifierExtended Class Doc Comment
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PositionExportIdentifierExtended implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PositionExportIdentifierExtended';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'null' => 'string',
        'n_stb' => 'string',
        'n_stb_ust_id' => 'string',
        'n_stb_none_ust_id' => 'string',
        'n_stb_im' => 'string',
        'revc' => 'string',
        'ig' => 'string',
        'al' => 'string',
        's_stfr' => 'string',
        'small_business' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'null' => null,
        'n_stb' => null,
        'n_stb_ust_id' => null,
        'n_stb_none_ust_id' => null,
        'n_stb_im' => null,
        'revc' => null,
        'ig' => null,
        'al' => null,
        's_stfr' => null,
        'small_business' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'null' => true,
		'n_stb' => true,
		'n_stb_ust_id' => true,
		'n_stb_none_ust_id' => true,
		'n_stb_im' => true,
		'revc' => true,
		'ig' => true,
		'al' => true,
		's_stfr' => true,
		'small_business' => true
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'null' => 'NULL',
        'n_stb' => 'nStb',
        'n_stb_ust_id' => 'nStbUstID',
        'n_stb_none_ust_id' => 'nStbNoneUstID',
        'n_stb_im' => 'nStbIm',
        'revc' => 'revc',
        'ig' => 'IG',
        'al' => 'AL',
        's_stfr' => 'sStfr',
        'small_business' => 'smallBusiness'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'null' => 'setNull',
        'n_stb' => 'setNStb',
        'n_stb_ust_id' => 'setNStbUstId',
        'n_stb_none_ust_id' => 'setNStbNoneUstId',
        'n_stb_im' => 'setNStbIm',
        'revc' => 'setRevc',
        'ig' => 'setIg',
        'al' => 'setAl',
        's_stfr' => 'setSStfr',
        'small_business' => 'setSmallBusiness'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'null' => 'getNull',
        'n_stb' => 'getNStb',
        'n_stb_ust_id' => 'getNStbUstId',
        'n_stb_none_ust_id' => 'getNStbNoneUstId',
        'n_stb_im' => 'getNStbIm',
        'revc' => 'getRevc',
        'ig' => 'getIg',
        'al' => 'getAl',
        's_stfr' => 'getSStfr',
        'small_business' => 'getSmallBusiness'
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
        $this->setIfExists('null', $data ?? [], null);
        $this->setIfExists('n_stb', $data ?? [], null);
        $this->setIfExists('n_stb_ust_id', $data ?? [], null);
        $this->setIfExists('n_stb_none_ust_id', $data ?? [], null);
        $this->setIfExists('n_stb_im', $data ?? [], null);
        $this->setIfExists('revc', $data ?? [], null);
        $this->setIfExists('ig', $data ?? [], null);
        $this->setIfExists('al', $data ?? [], null);
        $this->setIfExists('s_stfr', $data ?? [], null);
        $this->setIfExists('small_business', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
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
     * Gets null
     *
     * @return string|null
     */
    public function getNull()
    {
        return $this->container['null'];
    }

    /**
     * Sets null
     *
     * @param string|null $null Umsatzsteuerpflichtig
     *
     * @return self
     */
    public function setNull($null)
    {
        if (is_null($null)) {
            array_push($this->openAPINullablesSetToNull, null);
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('null', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['null'] = $null;

        return $this;
    }

    /**
     * Gets n_stb
     *
     * @return string|null
     */
    public function getNStb()
    {
        return $this->container['n_stb'];
    }

    /**
     * Sets n_stb
     *
     * @param string|null $n_stb Nicht steuerbar (Drittland)
     *
     * @return self
     */
    public function setNStb($n_stb)
    {
        if (is_null($n_stb)) {
            array_push($this->openAPINullablesSetToNull, 'n_stb');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_stb', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n_stb'] = $n_stb;

        return $this;
    }

    /**
     * Gets n_stb_ust_id
     *
     * @return string|null
     */
    public function getNStbUstId()
    {
        return $this->container['n_stb_ust_id'];
    }

    /**
     * Sets n_stb_ust_id
     *
     * @param string|null $n_stb_ust_id Nicht steuerbar (EU mit USt-IdNr.)
     *
     * @return self
     */
    public function setNStbUstId($n_stb_ust_id)
    {
        if (is_null($n_stb_ust_id)) {
            array_push($this->openAPINullablesSetToNull, 'n_stb_ust_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_stb_ust_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n_stb_ust_id'] = $n_stb_ust_id;

        return $this;
    }

    /**
     * Gets n_stb_none_ust_id
     *
     * @return string|null
     */
    public function getNStbNoneUstId()
    {
        return $this->container['n_stb_none_ust_id'];
    }

    /**
     * Sets n_stb_none_ust_id
     *
     * @param string|null $n_stb_none_ust_id Nicht steuerbar (EU ohne USt-IdNr.)
     *
     * @return self
     */
    public function setNStbNoneUstId($n_stb_none_ust_id)
    {
        if (is_null($n_stb_none_ust_id)) {
            array_push($this->openAPINullablesSetToNull, 'n_stb_none_ust_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_stb_none_ust_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n_stb_none_ust_id'] = $n_stb_none_ust_id;

        return $this;
    }

    /**
     * Gets n_stb_im
     *
     * @return string|null
     */
    public function getNStbIm()
    {
        return $this->container['n_stb_im'];
    }

    /**
     * Sets n_stb_im
     *
     * @param string|null $n_stb_im Nicht steuerbarer Innenumsatz
     *
     * @return self
     */
    public function setNStbIm($n_stb_im)
    {
        if (is_null($n_stb_im)) {
            array_push($this->openAPINullablesSetToNull, 'n_stb_im');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('n_stb_im', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['n_stb_im'] = $n_stb_im;

        return $this;
    }

    /**
     * Gets revc
     *
     * @return string|null
     */
    public function getRevc()
    {
        return $this->container['revc'];
    }

    /**
     * Sets revc
     *
     * @param string|null $revc Steuerschuldwechsel §13b (Inland)
     *
     * @return self
     */
    public function setRevc($revc)
    {
        if (is_null($revc)) {
            array_push($this->openAPINullablesSetToNull, 'revc');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('revc', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['revc'] = $revc;

        return $this;
    }

    /**
     * Gets ig
     *
     * @return string|null
     */
    public function getIg()
    {
        return $this->container['ig'];
    }

    /**
     * Sets ig
     *
     * @param string|null $ig Innergemeinschaftliche Lieferung
     *
     * @return self
     */
    public function setIg($ig)
    {
        if (is_null($ig)) {
            array_push($this->openAPINullablesSetToNull, 'ig');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('ig', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['ig'] = $ig;

        return $this;
    }

    /**
     * Gets al
     *
     * @return string|null
     */
    public function getAl()
    {
        return $this->container['al'];
    }

    /**
     * Sets al
     *
     * @param string|null $al Ausfuhrlieferung
     *
     * @return self
     */
    public function setAl($al)
    {
        if (is_null($al)) {
            array_push($this->openAPINullablesSetToNull, 'al');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('al', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['al'] = $al;

        return $this;
    }

    /**
     * Gets s_stfr
     *
     * @return string|null
     */
    public function getSStfr()
    {
        return $this->container['s_stfr'];
    }

    /**
     * Sets s_stfr
     *
     * @param string|null $s_stfr sonstige Steuerbefreiung
     *
     * @return self
     */
    public function setSStfr($s_stfr)
    {
        if (is_null($s_stfr)) {
            array_push($this->openAPINullablesSetToNull, 's_stfr');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('s_stfr', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['s_stfr'] = $s_stfr;

        return $this;
    }

    /**
     * Gets small_business
     *
     * @return string|null
     */
    public function getSmallBusiness()
    {
        return $this->container['small_business'];
    }

    /**
     * Sets small_business
     *
     * @param string|null $small_business Kleinunternehmen (Keine MwSt.)
     *
     * @return self
     */
    public function setSmallBusiness($small_business)
    {
        if (is_null($small_business)) {
            array_push($this->openAPINullablesSetToNull, 'small_business');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('small_business', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['small_business'] = $small_business;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
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


