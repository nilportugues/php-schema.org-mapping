<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\WarrantyPromise;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes WarrantyPromiseTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class WarrantyPromiseTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(WarrantyPromise::schemaUrl(), "http://schema.org/WarrantyPromise");
    }

    public function testDurationOfWarrantyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::durationOfWarranty());
    }

    public function testWarrantyScopeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, WarrantyPromise::warrantyScope());
    }
}