<?php
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

    public function testHighPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::highPrice());
    }

    public function testLowPriceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::lowPrice());
    }

    public function testOfferCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::offerCount());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AggregateOffer::offers());
    }
}