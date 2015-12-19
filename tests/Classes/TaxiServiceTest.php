<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\TaxiService;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TaxiServiceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class TaxiServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(TaxiService::schemaUrl(), "http://schema.org/TaxiService");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::alternateName());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::areaServed());
    }

    public function testAvailableChannelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::availableChannel());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::award());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::category());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::description());
    }

    public function testHasOfferCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::hasOfferCatalog());
    }

    public function testHoursAvailableWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::hoursAvailable());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::name());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::offers());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::potentialAction());
    }

    public function testProducesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::produces());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::provider());
    }

    public function testProviderMobilityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::providerMobility());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::review());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::sameAs());
    }

    public function testServiceAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::serviceArea());
    }

    public function testServiceAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::serviceAudience());
    }

    public function testServiceOutputWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::serviceOutput());
    }

    public function testServiceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::serviceType());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TaxiService::url());
    }
}