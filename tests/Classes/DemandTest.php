<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Demand;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DemandTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DemandTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Demand::schemaUrl(), "http://schema.org/Demand");
    }

    public function testAcceptedPaymentMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::acceptedPaymentMethod());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::additionalType());
    }

    public function testAdvanceBookingRequirementWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::advanceBookingRequirement());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::alternateName());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::areaServed());
    }

    public function testAvailabilityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::availability());
    }

    public function testAvailabilityEndsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::availabilityEnds());
    }

    public function testAvailabilityStartsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::availabilityStarts());
    }

    public function testAvailableAtOrFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::availableAtOrFrom());
    }

    public function testAvailableDeliveryMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::availableDeliveryMethod());
    }

    public function testBusinessFunctionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::businessFunction());
    }

    public function testDeliveryLeadTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::deliveryLeadTime());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::description());
    }

    public function testEligibleCustomerTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::eligibleCustomerType());
    }

    public function testEligibleDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::eligibleDuration());
    }

    public function testEligibleQuantityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::eligibleQuantity());
    }

    public function testEligibleRegionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::eligibleRegion());
    }

    public function testEligibleTransactionVolumeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::eligibleTransactionVolume());
    }

    public function testGtin12WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::gtin12());
    }

    public function testGtin13WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::gtin13());
    }

    public function testGtin14WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::gtin14());
    }

    public function testGtin8WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::gtin8());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::image());
    }

    public function testIncludesObjectWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::includesObject());
    }

    public function testIneligibleRegionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::ineligibleRegion());
    }

    public function testInventoryLevelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::inventoryLevel());
    }

    public function testItemConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::itemCondition());
    }

    public function testItemOfferedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::itemOffered());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::mainEntityOfPage());
    }

    public function testMpnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::mpn());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::potentialAction());
    }

    public function testPriceSpecificationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::priceSpecification());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::sameAs());
    }

    public function testSellerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::seller());
    }

    public function testSerialNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::serialNumber());
    }

    public function testSkuWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::sku());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::url());
    }

    public function testValidFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::validFrom());
    }

    public function testValidThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::validThrough());
    }

    public function testWarrantyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Demand::warranty());
    }
}