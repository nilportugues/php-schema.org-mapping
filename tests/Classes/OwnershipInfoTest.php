<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\OwnershipInfo;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OwnershipInfoTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class OwnershipInfoTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OwnershipInfo::schemaUrl(), "http://schema.org/OwnershipInfo");
    }

    public function testAcquiredFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::acquiredFrom());
    }

    public function testOwnedFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::ownedFrom());
    }

    public function testOwnedThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::ownedThrough());
    }

    public function testTypeOfGoodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OwnershipInfo::typeOfGood());
    }
}