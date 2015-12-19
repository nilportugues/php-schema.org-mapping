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

use NilPortugues\SchemaOrg\Classes\PriceSpecification;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PriceSpecificationTest.
 */
class PriceSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PriceSpecification::schemaUrl(), 'http://schema.org/PriceSpecification');
    }

    public function testEligibleQuantityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PriceSpecification::eligibleQuantity());
    }

    public function testEligibleTransactionVolumeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PriceSpecification::eligibleTransactionVolume());
    }

    public function testMaxPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PriceSpecification::maxPrice());
    }

    public function testMinPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PriceSpecification::minPrice());
    }

    public function testPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PriceSpecification::price());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PriceSpecification::priceCurrency());
    }

    public function testValidFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PriceSpecification::validFrom());
    }

    public function testValidThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PriceSpecification::validThrough());
    }

    public function testValueAddedTaxIncludedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PriceSpecification::valueAddedTaxIncluded());
    }
}
