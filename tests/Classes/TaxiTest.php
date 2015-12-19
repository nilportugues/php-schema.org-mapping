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

use NilPortugues\SchemaOrg\Classes\Taxi;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TaxiTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class TaxiTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Taxi::schemaUrl(), "http://schema.org/Taxi");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::alternateName());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::areaServed());
    }

    public function testAvailableChannelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::availableChannel());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::award());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::category());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::description());
    }

    public function testHasOfferCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::hasOfferCatalog());
    }

    public function testHoursAvailableWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::hoursAvailable());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::name());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::offers());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::potentialAction());
    }

    public function testProducesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::produces());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::provider());
    }

    public function testProviderMobilityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::providerMobility());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::review());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::sameAs());
    }

    public function testServiceAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::serviceArea());
    }

    public function testServiceAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::serviceAudience());
    }

    public function testServiceOutputWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::serviceOutput());
    }

    public function testServiceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::serviceType());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Taxi::url());
    }
}