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

use NilPortugues\SchemaOrg\Classes\UnitPriceSpecification;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes UnitPriceSpecificationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class UnitPriceSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(UnitPriceSpecification::schemaUrl(), "http://schema.org/UnitPriceSpecification");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::alternateName());
    }

    public function testBillingIncrementWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::billingIncrement());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::description());
    }

    public function testEligibleQuantityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::eligibleQuantity());
    }

    public function testEligibleTransactionVolumeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::eligibleTransactionVolume());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::mainEntityOfPage());
    }

    public function testMaxPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::maxPrice());
    }

    public function testMinPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::minPrice());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::potentialAction());
    }

    public function testPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::price());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::priceCurrency());
    }

    public function testPriceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::priceType());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::sameAs());
    }

    public function testUnitCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::unitCode());
    }

    public function testUnitTextWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::unitText());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::url());
    }

    public function testValidFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::validFrom());
    }

    public function testValidThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::validThrough());
    }

    public function testValueAddedTaxIncludedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, UnitPriceSpecification::valueAddedTaxIncluded());
    }
}