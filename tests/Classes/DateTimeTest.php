<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\DateTime;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DateTimeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DateTimeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DateTime::schemaUrl(), "http://schema.org/DateTime");
    }


}