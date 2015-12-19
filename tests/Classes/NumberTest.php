<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Number;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes NumberTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class NumberTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Number::schemaUrl(), "http://schema.org/Number");
    }


}