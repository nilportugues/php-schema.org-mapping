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

use NilPortugues\SchemaOrg\Classes\BroadcastService;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BroadcastServiceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BroadcastServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BroadcastService::schemaUrl(), "http://schema.org/BroadcastService");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::alternateName());
    }

    public function testAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::area());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::areaServed());
    }

    public function testAvailableChannelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::availableChannel());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::award());
    }

    public function testBroadcasterWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::broadcaster());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::category());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::description());
    }

    public function testHasOfferCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::hasOfferCatalog());
    }

    public function testHoursAvailableWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::hoursAvailable());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::name());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::offers());
    }

    public function testParentServiceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::parentService());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::potentialAction());
    }

    public function testProducesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::produces());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::provider());
    }

    public function testProviderMobilityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::providerMobility());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::review());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::sameAs());
    }

    public function testServiceAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::serviceArea());
    }

    public function testServiceAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::serviceAudience());
    }

    public function testServiceOutputWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::serviceOutput());
    }

    public function testServiceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::serviceType());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::url());
    }

    public function testVideoFormatWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BroadcastService::videoFormat());
    }
}