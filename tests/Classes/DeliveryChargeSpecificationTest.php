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

    public function testEligibleQuantityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::eligibleQuantity());
    }

    public function testEligibleRegionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::eligibleRegion());
    }

    public function testEligibleTransactionVolumeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::eligibleTransactionVolume());
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

    public function testMaxPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::maxPrice());
    }

    public function testMinPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::minPrice());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::potentialAction());
    }

    public function testPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::price());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::priceCurrency());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::url());
    }

    public function testValidFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::validFrom());
    }

    public function testValidThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::validThrough());
    }

    public function testValueAddedTaxIncludedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DeliveryChargeSpecification::valueAddedTaxIncluded());
    }
}