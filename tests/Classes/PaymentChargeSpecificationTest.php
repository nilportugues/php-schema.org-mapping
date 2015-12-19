<?php
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

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PaymentChargeSpecification::url());
    }
}