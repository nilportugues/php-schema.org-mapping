<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Date;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DateTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DateTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Date::schemaUrl(), "http://schema.org/Date");
    }


}