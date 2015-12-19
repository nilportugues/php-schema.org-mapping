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

use NilPortugues\SchemaOrg\Classes\Offer;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OfferTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class OfferTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Offer::schemaUrl(), "http://schema.org/Offer");
    }

    public function testAcceptedPaymentMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::acceptedPaymentMethod());
    }

    public function testAddOnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::addOn());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::additionalType());
    }

    public function testAdvanceBookingRequirementWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::advanceBookingRequirement());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::alternateName());
    }

    public function testAreaServedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::areaServed());
    }

    public function testAvailabilityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::availability());
    }

    public function testAvailabilityEndsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::availabilityEnds());
    }

    public function testAvailabilityStartsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::availabilityStarts());
    }

    public function testAvailableAtOrFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::availableAtOrFrom());
    }

    public function testAvailableDeliveryMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::availableDeliveryMethod());
    }

    public function testBusinessFunctionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::businessFunction());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::category());
    }

    public function testDeliveryLeadTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::deliveryLeadTime());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::description());
    }

    public function testEligibleCustomerTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::eligibleCustomerType());
    }

    public function testEligibleDurationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::eligibleDuration());
    }

    public function testEligibleQuantityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::eligibleQuantity());
    }

    public function testEligibleRegionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::eligibleRegion());
    }

    public function testEligibleTransactionVolumeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::eligibleTransactionVolume());
    }

    public function testGtin12WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::gtin12());
    }

    public function testGtin13WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::gtin13());
    }

    public function testGtin14WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::gtin14());
    }

    public function testGtin8WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::gtin8());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::image());
    }

    public function testIncludesObjectWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::includesObject());
    }

    public function testIneligibleRegionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::ineligibleRegion());
    }

    public function testInventoryLevelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::inventoryLevel());
    }

    public function testItemConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::itemCondition());
    }

    public function testItemOfferedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::itemOffered());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::mainEntityOfPage());
    }

    public function testMpnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::mpn());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::name());
    }

    public function testOfferedByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::offeredBy());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::potentialAction());
    }

    public function testPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::price());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::priceCurrency());
    }

    public function testPriceSpecificationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::priceSpecification());
    }

    public function testPriceValidUntilWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::priceValidUntil());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::reviews());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::sameAs());
    }

    public function testSellerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::seller());
    }

    public function testSerialNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::serialNumber());
    }

    public function testSkuWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::sku());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::url());
    }

    public function testValidFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::validFrom());
    }

    public function testValidThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::validThrough());
    }

    public function testWarrantyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Offer::warranty());
    }
}