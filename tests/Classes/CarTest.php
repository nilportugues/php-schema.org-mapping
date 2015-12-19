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

use NilPortugues\SchemaOrg\Classes\Car;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes CarTest.
 */
class CarTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Car::schemaUrl(), 'http://schema.org/Car');
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::additionalProperty());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::aggregateRating());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::audience());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::awards());
    }

    public function testBrandWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::brand());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::category());
    }

    public function testColorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::color());
    }

    public function testDepthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::depth());
    }

    public function testGtin12WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::gtin12());
    }

    public function testGtin13WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::gtin13());
    }

    public function testGtin14WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::gtin14());
    }

    public function testGtin8WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::gtin8());
    }

    public function testHeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::height());
    }

    public function testIsAccessoryOrSparePartForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::isAccessoryOrSparePartFor());
    }

    public function testIsConsumableForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::isConsumableFor());
    }

    public function testIsRelatedToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::isRelatedTo());
    }

    public function testIsSimilarToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::isSimilarTo());
    }

    public function testItemConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::itemCondition());
    }

    public function testLogoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::logo());
    }

    public function testManufacturerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::manufacturer());
    }

    public function testModelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::model());
    }

    public function testMpnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::mpn());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::offers());
    }

    public function testProductIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::productID());
    }

    public function testProductionDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::productionDate());
    }

    public function testPurchaseDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::purchaseDate());
    }

    public function testReleaseDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::releaseDate());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::reviews());
    }

    public function testSkuWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::sku());
    }

    public function testWeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::weight());
    }

    public function testWidthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Car::width());
    }
}
