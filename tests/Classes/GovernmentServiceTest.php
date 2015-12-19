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

use NilPortugues\SchemaOrg\Classes\GovernmentService;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GovernmentServiceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class GovernmentServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(GovernmentService::schemaUrl(), "http://schema.org/GovernmentService");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::alternateName());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::areaServed());
    }

    public function testAvailableChannelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::availableChannel());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::award());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::category());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::description());
    }

    public function testHasOfferCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::hasOfferCatalog());
    }

    public function testHoursAvailableWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::hoursAvailable());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::name());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::offers());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::potentialAction());
    }

    public function testProducesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::produces());
    }

    public function testProviderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::provider());
    }

    public function testProviderMobilityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::providerMobility());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::review());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::sameAs());
    }

    public function testServiceAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::serviceArea());
    }

    public function testServiceAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::serviceAudience());
    }

    public function testServiceOperatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::serviceOperator());
    }

    public function testServiceOutputWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::serviceOutput());
    }

    public function testServiceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::serviceType());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::url());
    }
}