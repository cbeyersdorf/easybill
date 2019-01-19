<?php
/**
 * TimeTrackingTest
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
 * OpenAPI spec version: 1.35.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace cbeyersdorf\easybill;

/**
 * TimeTrackingTest Class Doc Comment
 *
 * @category    Class
 * @description TimeTracking
 * @package     cbeyersdorf\easybill
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class TimeTrackingTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "TimeTracking"
     */
    public function testTimeTracking()
    {
    }

    /**
     * Test attribute "cleared_at"
     */
    public function testPropertyClearedAt()
    {
    }

    /**
     * Test attribute "count"
     */
    public function testPropertyCount()
    {
    }

    /**
     * Test attribute "created_at"
     */
    public function testPropertyCreatedAt()
    {
    }

    /**
     * Test attribute "date_from_at"
     */
    public function testPropertyDateFromAt()
    {
    }

    /**
     * Test attribute "date_thru_at"
     */
    public function testPropertyDateThruAt()
    {
    }

    /**
     * Test attribute "description"
     */
    public function testPropertyDescription()
    {
    }

    /**
     * Test attribute "hourly_rate"
     */
    public function testPropertyHourlyRate()
    {
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
    }

    /**
     * Test attribute "note"
     */
    public function testPropertyNote()
    {
    }

    /**
     * Test attribute "number"
     */
    public function testPropertyNumber()
    {
    }

    /**
     * Test attribute "position_id"
     */
    public function testPropertyPositionId()
    {
    }

    /**
     * Test attribute "project_id"
     */
    public function testPropertyProjectId()
    {
    }

    /**
     * Test attribute "login_id"
     */
    public function testPropertyLoginId()
    {
    }

    /**
     * Test attribute "timer_value"
     */
    public function testPropertyTimerValue()
    {
    }
}
