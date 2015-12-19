<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\DataType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DataTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DataTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DataType::schemaUrl(), "http://schema.org/DataType");
    }


}