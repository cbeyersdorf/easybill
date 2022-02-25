<?php
/**
 * DocumentRecurring
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
 * OpenAPI spec version: 1.70.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.26
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
 * DocumentRecurring Class Doc Comment
 *
 * @category Class
 * @description This object is only available in document type RECURRING.
 * @package  cbeyersdorf\easybill
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentRecurring implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentRecurring';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'next_date' => '\DateTime',
        'frequency' => 'string',
        'frequency_special' => 'string',
        'interval' => 'int',
        'end_date_or_count' => 'string',
        'status' => 'string',
        'as_draft' => 'bool',
        'is_notify' => 'bool',
        'send_as' => 'string',
        'is_sign' => 'bool',
        'is_paid' => 'bool',
        'paid_date_option' => 'string',
        'is_sepa' => 'bool',
        'sepa_local_instrument' => 'string',
        'sepa_sequence_type' => 'string',
        'sepa_reference' => 'string',
        'sepa_remittance_information' => 'string',
        'target_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'next_date' => 'date',
        'frequency' => null,
        'frequency_special' => null,
        'interval' => null,
        'end_date_or_count' => null,
        'status' => null,
        'as_draft' => null,
        'is_notify' => null,
        'send_as' => null,
        'is_sign' => null,
        'is_paid' => null,
        'paid_date_option' => null,
        'is_sepa' => null,
        'sepa_local_instrument' => null,
        'sepa_sequence_type' => null,
        'sepa_reference' => null,
        'sepa_remittance_information' => null,
        'target_type' => null
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
        'next_date' => 'next_date',
        'frequency' => 'frequency',
        'frequency_special' => 'frequency_special',
        'interval' => 'interval',
        'end_date_or_count' => 'end_date_or_count',
        'status' => 'status',
        'as_draft' => 'as_draft',
        'is_notify' => 'is_notify',
        'send_as' => 'send_as',
        'is_sign' => 'is_sign',
        'is_paid' => 'is_paid',
        'paid_date_option' => 'paid_date_option',
        'is_sepa' => 'is_sepa',
        'sepa_local_instrument' => 'sepa_local_instrument',
        'sepa_sequence_type' => 'sepa_sequence_type',
        'sepa_reference' => 'sepa_reference',
        'sepa_remittance_information' => 'sepa_remittance_information',
        'target_type' => 'target_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'next_date' => 'setNextDate',
        'frequency' => 'setFrequency',
        'frequency_special' => 'setFrequencySpecial',
        'interval' => 'setInterval',
        'end_date_or_count' => 'setEndDateOrCount',
        'status' => 'setStatus',
        'as_draft' => 'setAsDraft',
        'is_notify' => 'setIsNotify',
        'send_as' => 'setSendAs',
        'is_sign' => 'setIsSign',
        'is_paid' => 'setIsPaid',
        'paid_date_option' => 'setPaidDateOption',
        'is_sepa' => 'setIsSepa',
        'sepa_local_instrument' => 'setSepaLocalInstrument',
        'sepa_sequence_type' => 'setSepaSequenceType',
        'sepa_reference' => 'setSepaReference',
        'sepa_remittance_information' => 'setSepaRemittanceInformation',
        'target_type' => 'setTargetType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'next_date' => 'getNextDate',
        'frequency' => 'getFrequency',
        'frequency_special' => 'getFrequencySpecial',
        'interval' => 'getInterval',
        'end_date_or_count' => 'getEndDateOrCount',
        'status' => 'getStatus',
        'as_draft' => 'getAsDraft',
        'is_notify' => 'getIsNotify',
        'send_as' => 'getSendAs',
        'is_sign' => 'getIsSign',
        'is_paid' => 'getIsPaid',
        'paid_date_option' => 'getPaidDateOption',
        'is_sepa' => 'getIsSepa',
        'sepa_local_instrument' => 'getSepaLocalInstrument',
        'sepa_sequence_type' => 'getSepaSequenceType',
        'sepa_reference' => 'getSepaReference',
        'sepa_remittance_information' => 'getSepaRemittanceInformation',
        'target_type' => 'getTargetType'
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

    const FREQUENCY_DAILY = 'DAILY';
    const FREQUENCY_WEEKLY = 'WEEKLY';
    const FREQUENCY_MONTHLY = 'MONTHLY';
    const FREQUENCY_YEARLY = 'YEARLY';
    const FREQUENCY_SPECIAL_LASTDAYOFMONTH = 'LASTDAYOFMONTH';
    const STATUS_RUNNING = 'RUNNING';
    const STATUS_PAUSE = 'PAUSE';
    const STATUS_STOP = 'STOP';
    const STATUS_WAITING = 'WAITING';
    const SEND_AS_EMAIL = 'EMAIL';
    const SEND_AS_FAX = 'FAX';
    const SEND_AS_POST = 'POST';
    const PAID_DATE_OPTION_CREATED_DATE = 'created_date';
    const PAID_DATE_OPTION_DUE_DATE = 'due_date';
    const PAID_DATE_OPTION_NEXT_VALID_DATE = 'next_valid_date';
    const SEPA_LOCAL_INSTRUMENT_CORE = 'CORE';
    const SEPA_LOCAL_INSTRUMENT_COR1 = 'COR1';
    const SEPA_LOCAL_INSTRUMENT_B2_B = 'B2B';
    const SEPA_SEQUENCE_TYPE_FRST = 'FRST';
    const SEPA_SEQUENCE_TYPE_OOFF = 'OOFF';
    const SEPA_SEQUENCE_TYPE_FNAL = 'FNAL';
    const SEPA_SEQUENCE_TYPE_RCUR = 'RCUR';
    const TARGET_TYPE_INVOICE = 'INVOICE';
    const TARGET_TYPE_CREDIT = 'CREDIT';
    const TARGET_TYPE_ORDER = 'ORDER';
    const TARGET_TYPE_OFFER = 'OFFER';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_DAILY,
            self::FREQUENCY_WEEKLY,
            self::FREQUENCY_MONTHLY,
            self::FREQUENCY_YEARLY,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencySpecialAllowableValues()
    {
        return [
            self::FREQUENCY_SPECIAL_LASTDAYOFMONTH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_RUNNING,
            self::STATUS_PAUSE,
            self::STATUS_STOP,
            self::STATUS_WAITING,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSendAsAllowableValues()
    {
        return [
            self::SEND_AS_EMAIL,
            self::SEND_AS_FAX,
            self::SEND_AS_POST,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaidDateOptionAllowableValues()
    {
        return [
            self::PAID_DATE_OPTION_CREATED_DATE,
            self::PAID_DATE_OPTION_DUE_DATE,
            self::PAID_DATE_OPTION_NEXT_VALID_DATE,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSepaLocalInstrumentAllowableValues()
    {
        return [
            self::SEPA_LOCAL_INSTRUMENT_CORE,
            self::SEPA_LOCAL_INSTRUMENT_COR1,
            self::SEPA_LOCAL_INSTRUMENT_B2_B,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSepaSequenceTypeAllowableValues()
    {
        return [
            self::SEPA_SEQUENCE_TYPE_FRST,
            self::SEPA_SEQUENCE_TYPE_OOFF,
            self::SEPA_SEQUENCE_TYPE_FNAL,
            self::SEPA_SEQUENCE_TYPE_RCUR,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTargetTypeAllowableValues()
    {
        return [
            self::TARGET_TYPE_INVOICE,
            self::TARGET_TYPE_CREDIT,
            self::TARGET_TYPE_ORDER,
            self::TARGET_TYPE_OFFER,
        ];
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
        $this->container['next_date'] = isset($data['next_date']) ? $data['next_date'] : null;
        $this->container['frequency'] = isset($data['frequency']) ? $data['frequency'] : 'MONTHLY';
        $this->container['frequency_special'] = isset($data['frequency_special']) ? $data['frequency_special'] : null;
        $this->container['interval'] = isset($data['interval']) ? $data['interval'] : null;
        $this->container['end_date_or_count'] = isset($data['end_date_or_count']) ? $data['end_date_or_count'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : 'WAITING';
        $this->container['as_draft'] = isset($data['as_draft']) ? $data['as_draft'] : false;
        $this->container['is_notify'] = isset($data['is_notify']) ? $data['is_notify'] : false;
        $this->container['send_as'] = isset($data['send_as']) ? $data['send_as'] : null;
        $this->container['is_sign'] = isset($data['is_sign']) ? $data['is_sign'] : false;
        $this->container['is_paid'] = isset($data['is_paid']) ? $data['is_paid'] : false;
        $this->container['paid_date_option'] = isset($data['paid_date_option']) ? $data['paid_date_option'] : 'created_date';
        $this->container['is_sepa'] = isset($data['is_sepa']) ? $data['is_sepa'] : false;
        $this->container['sepa_local_instrument'] = isset($data['sepa_local_instrument']) ? $data['sepa_local_instrument'] : null;
        $this->container['sepa_sequence_type'] = isset($data['sepa_sequence_type']) ? $data['sepa_sequence_type'] : null;
        $this->container['sepa_reference'] = isset($data['sepa_reference']) ? $data['sepa_reference'] : null;
        $this->container['sepa_remittance_information'] = isset($data['sepa_remittance_information']) ? $data['sepa_remittance_information'] : null;
        $this->container['target_type'] = isset($data['target_type']) ? $data['target_type'] : 'INVOICE';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['next_date'] === null) {
            $invalidProperties[] = "'next_date' can't be null";
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'frequency', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFrequencySpecialAllowableValues();
        if (!is_null($this->container['frequency_special']) && !in_array($this->container['frequency_special'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'frequency_special', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSendAsAllowableValues();
        if (!is_null($this->container['send_as']) && !in_array($this->container['send_as'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'send_as', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaidDateOptionAllowableValues();
        if (!is_null($this->container['paid_date_option']) && !in_array($this->container['paid_date_option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'paid_date_option', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSepaLocalInstrumentAllowableValues();
        if (!is_null($this->container['sepa_local_instrument']) && !in_array($this->container['sepa_local_instrument'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sepa_local_instrument', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSepaSequenceTypeAllowableValues();
        if (!is_null($this->container['sepa_sequence_type']) && !in_array($this->container['sepa_sequence_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'sepa_sequence_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTargetTypeAllowableValues();
        if (!is_null($this->container['target_type']) && !in_array($this->container['target_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'target_type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets next_date
     *
     * @return \DateTime
     */
    public function getNextDate()
    {
        return $this->container['next_date'];
    }

    /**
     * Sets next_date
     *
     * @param \DateTime $next_date Must be in the future
     *
     * @return $this
     */
    public function setNextDate($next_date)
    {
        $this->container['next_date'] = $next_date;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string $frequency frequency
     *
     * @return $this
     */
    public function setFrequency($frequency)
    {
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($frequency) && !in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'frequency', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets frequency_special
     *
     * @return string
     */
    public function getFrequencySpecial()
    {
        return $this->container['frequency_special'];
    }

    /**
     * Sets frequency_special
     *
     * @param string $frequency_special frequency_special
     *
     * @return $this
     */
    public function setFrequencySpecial($frequency_special)
    {
        $allowedValues = $this->getFrequencySpecialAllowableValues();
        if (!is_null($frequency_special) && !in_array($frequency_special, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'frequency_special', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency_special'] = $frequency_special;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return int
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param int $interval interval
     *
     * @return $this
     */
    public function setInterval($interval)
    {
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets end_date_or_count
     *
     * @return string
     */
    public function getEndDateOrCount()
    {
        return $this->container['end_date_or_count'];
    }

    /**
     * Sets end_date_or_count
     *
     * @param string $end_date_or_count Date of last exectution day or number of times to exectute
     *
     * @return $this
     */
    public function setEndDateOrCount($end_date_or_count)
    {
        $this->container['end_date_or_count'] = $end_date_or_count;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($status) && !in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets as_draft
     *
     * @return bool
     */
    public function getAsDraft()
    {
        return $this->container['as_draft'];
    }

    /**
     * Sets as_draft
     *
     * @param bool $as_draft as_draft
     *
     * @return $this
     */
    public function setAsDraft($as_draft)
    {
        $this->container['as_draft'] = $as_draft;

        return $this;
    }

    /**
     * Gets is_notify
     *
     * @return bool
     */
    public function getIsNotify()
    {
        return $this->container['is_notify'];
    }

    /**
     * Sets is_notify
     *
     * @param bool $is_notify is_notify
     *
     * @return $this
     */
    public function setIsNotify($is_notify)
    {
        $this->container['is_notify'] = $is_notify;

        return $this;
    }

    /**
     * Gets send_as
     *
     * @return string
     */
    public function getSendAs()
    {
        return $this->container['send_as'];
    }

    /**
     * Sets send_as
     *
     * @param string $send_as send_as
     *
     * @return $this
     */
    public function setSendAs($send_as)
    {
        $allowedValues = $this->getSendAsAllowableValues();
        if (!is_null($send_as) && !in_array($send_as, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'send_as', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['send_as'] = $send_as;

        return $this;
    }

    /**
     * Gets is_sign
     *
     * @return bool
     */
    public function getIsSign()
    {
        return $this->container['is_sign'];
    }

    /**
     * Sets is_sign
     *
     * @param bool $is_sign is_sign
     *
     * @return $this
     */
    public function setIsSign($is_sign)
    {
        $this->container['is_sign'] = $is_sign;

        return $this;
    }

    /**
     * Gets is_paid
     *
     * @return bool
     */
    public function getIsPaid()
    {
        return $this->container['is_paid'];
    }

    /**
     * Sets is_paid
     *
     * @param bool $is_paid is_paid
     *
     * @return $this
     */
    public function setIsPaid($is_paid)
    {
        $this->container['is_paid'] = $is_paid;

        return $this;
    }

    /**
     * Gets paid_date_option
     *
     * @return string
     */
    public function getPaidDateOption()
    {
        return $this->container['paid_date_option'];
    }

    /**
     * Sets paid_date_option
     *
     * @param string $paid_date_option Option is used to determine what date is used for the payment if is_paid is true. \"next_valid_date\" selects the next workday in regards to the created date of the document if the date falls on a saturday or sunday.
     *
     * @return $this
     */
    public function setPaidDateOption($paid_date_option)
    {
        $allowedValues = $this->getPaidDateOptionAllowableValues();
        if (!is_null($paid_date_option) && !in_array($paid_date_option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'paid_date_option', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['paid_date_option'] = $paid_date_option;

        return $this;
    }

    /**
     * Gets is_sepa
     *
     * @return bool
     */
    public function getIsSepa()
    {
        return $this->container['is_sepa'];
    }

    /**
     * Sets is_sepa
     *
     * @param bool $is_sepa is_sepa
     *
     * @return $this
     */
    public function setIsSepa($is_sepa)
    {
        $this->container['is_sepa'] = $is_sepa;

        return $this;
    }

    /**
     * Gets sepa_local_instrument
     *
     * @return string
     */
    public function getSepaLocalInstrument()
    {
        return $this->container['sepa_local_instrument'];
    }

    /**
     * Sets sepa_local_instrument
     *
     * @param string $sepa_local_instrument sepa_local_instrument
     *
     * @return $this
     */
    public function setSepaLocalInstrument($sepa_local_instrument)
    {
        $allowedValues = $this->getSepaLocalInstrumentAllowableValues();
        if (!is_null($sepa_local_instrument) && !in_array($sepa_local_instrument, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sepa_local_instrument', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sepa_local_instrument'] = $sepa_local_instrument;

        return $this;
    }

    /**
     * Gets sepa_sequence_type
     *
     * @return string
     */
    public function getSepaSequenceType()
    {
        return $this->container['sepa_sequence_type'];
    }

    /**
     * Sets sepa_sequence_type
     *
     * @param string $sepa_sequence_type sepa_sequence_type
     *
     * @return $this
     */
    public function setSepaSequenceType($sepa_sequence_type)
    {
        $allowedValues = $this->getSepaSequenceTypeAllowableValues();
        if (!is_null($sepa_sequence_type) && !in_array($sepa_sequence_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'sepa_sequence_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sepa_sequence_type'] = $sepa_sequence_type;

        return $this;
    }

    /**
     * Gets sepa_reference
     *
     * @return string
     */
    public function getSepaReference()
    {
        return $this->container['sepa_reference'];
    }

    /**
     * Sets sepa_reference
     *
     * @param string $sepa_reference sepa_reference
     *
     * @return $this
     */
    public function setSepaReference($sepa_reference)
    {
        $this->container['sepa_reference'] = $sepa_reference;

        return $this;
    }

    /**
     * Gets sepa_remittance_information
     *
     * @return string
     */
    public function getSepaRemittanceInformation()
    {
        return $this->container['sepa_remittance_information'];
    }

    /**
     * Sets sepa_remittance_information
     *
     * @param string $sepa_remittance_information sepa_remittance_information
     *
     * @return $this
     */
    public function setSepaRemittanceInformation($sepa_remittance_information)
    {
        $this->container['sepa_remittance_information'] = $sepa_remittance_information;

        return $this;
    }

    /**
     * Gets target_type
     *
     * @return string
     */
    public function getTargetType()
    {
        return $this->container['target_type'];
    }

    /**
     * Sets target_type
     *
     * @param string $target_type The document type that will be generated. Can not be changed on existing documents.
     *
     * @return $this
     */
    public function setTargetType($target_type)
    {
        $allowedValues = $this->getTargetTypeAllowableValues();
        if (!is_null($target_type) && !in_array($target_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'target_type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['target_type'] = $target_type;

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


