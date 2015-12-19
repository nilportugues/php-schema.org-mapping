<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\BusinessEntityType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BusinessEntityTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BusinessEntityTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BusinessEntityType::schemaUrl(), "http://schema.org/BusinessEntityType");
    }


}