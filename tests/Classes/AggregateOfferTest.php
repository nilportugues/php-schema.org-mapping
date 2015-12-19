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

use NilPortugues\SchemaOrg\Classes\AggregateOffer;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes AggregateOfferTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class AggregateOfferTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(AggregateOffer::schemaUrl(), "http://schema.org/AggregateOffer");
    }

    public function testAcceptedPaymentMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::acceptedPaymentMethod());
    }

    public function testAddOnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::addOn());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::additionalType());
    }

    public function testAdvanceBookingRequirementWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::advanceBookingRequirement());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::alternateName());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::areaServed());
    }

    public function testAvailabilityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::availability());
    }

    public function testAvailabilityEndsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::availabilityEnds());
    }

    public function testAvailabilityStartsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::availabilityStarts());
    }

    public function testAvailableAtOrFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::availableAtOrFrom());
    }

    public function testAvailableDeliveryMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::availableDeliveryMethod());
    }

    public function testBusinessFunctionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::businessFunction());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::category());
    }

    public function testDeliveryLeadTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::deliveryLeadTime());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::description());
    }

    public function testEligibleCustomerTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::eligibleCustomerType());
    }

    public function testEligibleDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::eligibleDuration());
    }

    public function testEligibleQuantityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::eligibleQuantity());
    }

    public function testEligibleRegionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::eligibleRegion());
    }

    public function testEligibleTransactionVolumeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::eligibleTransactionVolume());
    }

    public function testGtin12WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::gtin12());
    }

    public function testGtin13WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::gtin13());
    }

    public function testGtin14WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::gtin14());
    }

    public function testGtin8WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::gtin8());
    }

    public function testHighPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::highPrice());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::image());
    }

    public function testIncludesObjectWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::includesObject());
    }

    public function testIneligibleRegionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::ineligibleRegion());
    }

    public function testInventoryLevelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::inventoryLevel());
    }

    public function testItemConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::itemCondition());
    }

    public function testItemOfferedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::itemOffered());
    }

    public function testLowPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::lowPrice());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::mainEntityOfPage());
    }

    public function testMpnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::mpn());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::name());
    }

    public function testOfferCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::offerCount());
    }

    public function testOfferedByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::offeredBy());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::offers());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::potentialAction());
    }

    public function testPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::price());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::priceCurrency());
    }

    public function testPriceSpecificationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::priceSpecification());
    }

    public function testPriceValidUntilWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::priceValidUntil());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::reviews());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::sameAs());
    }

    public function testSellerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::seller());
    }

    public function testSerialNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::serialNumber());
    }

    public function testSkuWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::sku());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::url());
    }

    public function testValidFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::validFrom());
    }

    public function testValidThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::validThrough());
    }

    public function testWarrantyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::warranty());
    }
}