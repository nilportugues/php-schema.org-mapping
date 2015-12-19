<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\ParcelDelivery;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ParcelDeliveryTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ParcelDeliveryTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ParcelDelivery::schemaUrl(), "http://schema.org/ParcelDelivery");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::alternateName());
    }

    public function testCarrierWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::carrier());
    }

    public function testDeliveryAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::deliveryAddress());
    }

    public function testDeliveryStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::deliveryStatus());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::description());
    }

    public function testExpectedArrivalFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::expectedArrivalFrom());
    }

    public function testExpectedArrivalUntilWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::expectedArrivalUntil());
    }

    public function testHasDeliveryMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::hasDeliveryMethod());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::image());
    }

    public function testItemShippedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::itemShipped());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::name());
    }

    public function testOriginAddressWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::originAddress());
    }

    public function testPartOfOrderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::partOfOrder());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::potentialAction());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::provider());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::sameAs());
    }

    public function testTrackingNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::trackingNumber());
    }

    public function testTrackingUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::trackingUrl());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ParcelDelivery::url());
    }
}