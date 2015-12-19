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

use NilPortugues\SchemaOrg\Classes\Product;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ProductTest.
 */
class ProductTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Product::schemaUrl(), 'http://schema.org/Product');
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::additionalProperty());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::aggregateRating());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::audience());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::awards());
    }

    public function testBrandWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::brand());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::category());
    }

    public function testColorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::color());
    }

    public function testDepthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::depth());
    }

    public function testGtin12WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::gtin12());
    }

    public function testGtin13WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::gtin13());
    }

    public function testGtin14WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::gtin14());
    }

    public function testGtin8WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::gtin8());
    }

    public function testHeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::height());
    }

    public function testIsAccessoryOrSparePartForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::isAccessoryOrSparePartFor());
    }

    public function testIsConsumableForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::isConsumableFor());
    }

    public function testIsRelatedToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::isRelatedTo());
    }

    public function testIsSimilarToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::isSimilarTo());
    }

    public function testItemConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::itemCondition());
    }

    public function testLogoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::logo());
    }

    public function testManufacturerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::manufacturer());
    }

    public function testModelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::model());
    }

    public function testMpnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::mpn());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::offers());
    }

    public function testProductIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::productID());
    }

    public function testProductionDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::productionDate());
    }

    public function testPurchaseDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::purchaseDate());
    }

    public function testReleaseDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::releaseDate());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::reviews());
    }

    public function testSkuWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::sku());
    }

    public function testWeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::weight());
    }

    public function testWidthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Product::width());
    }
}
