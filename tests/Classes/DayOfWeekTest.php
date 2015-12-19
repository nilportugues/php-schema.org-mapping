<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\DayOfWeek;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DayOfWeekTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DayOfWeekTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DayOfWeek::schemaUrl(), "http://schema.org/DayOfWeek");
    }


}