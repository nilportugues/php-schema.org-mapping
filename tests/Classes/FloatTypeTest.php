<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\FloatType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes FloatTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class FloatTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(FloatType::schemaUrl(), "http://schema.org/Float");
    }


}