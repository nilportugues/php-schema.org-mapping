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

use NilPortugues\SchemaOrg\Classes\PaymentChargeSpecification;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PaymentChargeSpecificationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PaymentChargeSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PaymentChargeSpecification::schemaUrl(), "http://schema.org/PaymentChargeSpecification");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::alternateName());
    }

    public function testAppliesToDeliveryMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::appliesToDeliveryMethod());
    }

    public function testAppliesToPaymentMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::appliesToPaymentMethod());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::description());
    }

    public function testEligibleQuantityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::eligibleQuantity());
    }

    public function testEligibleTransactionVolumeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::eligibleTransactionVolume());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::mainEntityOfPage());
    }

    public function testMaxPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::maxPrice());
    }

    public function testMinPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::minPrice());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::potentialAction());
    }

    public function testPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::price());
    }

    public function testPriceCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::priceCurrency());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::url());
    }

    public function testValidFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::validFrom());
    }

    public function testValidThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::validThrough());
    }

    public function testValueAddedTaxIncludedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::valueAddedTaxIncluded());
    }
}