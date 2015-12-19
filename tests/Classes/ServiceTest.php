<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Service;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ServiceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Service::schemaUrl(), "http://schema.org/Service");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::alternateName());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::areaServed());
    }

    public function testAvailableChannelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::availableChannel());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::award());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::category());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::description());
    }

    public function testHasOfferCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::hasOfferCatalog());
    }

    public function testHoursAvailableWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::hoursAvailable());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::name());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::offers());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::potentialAction());
    }

    public function testProducesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::produces());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::provider());
    }

    public function testProviderMobilityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::providerMobility());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::review());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::sameAs());
    }

    public function testServiceAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::serviceArea());
    }

    public function testServiceAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::serviceAudience());
    }

    public function testServiceOutputWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::serviceOutput());
    }

    public function testServiceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::serviceType());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Service::url());
    }
}