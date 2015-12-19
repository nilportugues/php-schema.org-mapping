<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\EngineSpecification;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes EngineSpecificationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class EngineSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(EngineSpecification::schemaUrl(), "http://schema.org/EngineSpecification");
    }

    public function testFuelTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EngineSpecification::fuelType());
    }
}