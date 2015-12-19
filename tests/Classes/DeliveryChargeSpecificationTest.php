<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\DeliveryChargeSpecification;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DeliveryChargeSpecificationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DeliveryChargeSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DeliveryChargeSpecification::schemaUrl(), "http://schema.org/DeliveryChargeSpecification");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::alternateName());
    }

    public function testAppliesToDeliveryMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::appliesToDeliveryMethod());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::areaServed());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::description());
    }

    public function testEligibleRegionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::eligibleRegion());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::image());
    }

    public function testIneligibleRegionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::ineligibleRegion());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::url());
    }
}