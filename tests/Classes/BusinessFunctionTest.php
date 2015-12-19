<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\BusinessFunction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BusinessFunctionTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BusinessFunctionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BusinessFunction::schemaUrl(), "http://schema.org/BusinessFunction");
    }


}