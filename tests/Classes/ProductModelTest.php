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

use NilPortugues\SchemaOrg\Classes\ProductModel;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ProductModelTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ProductModelTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ProductModel::schemaUrl(), "http://schema.org/ProductModel");
    }

    public function testAdditionalPropertyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::additionalProperty());
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::additionalType());
    }

    public function testAggregateRatingWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::aggregateRating());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::alternateName());
    }

    public function testAudienceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::audience());
    }

    public function testAwardWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::award());
    }

    public function testAwardsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::awards());
    }

    public function testBrandWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::brand());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::category());
    }

    public function testColorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::color());
    }

    public function testDepthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::depth());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::description());
    }

    public function testGtin12WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::gtin12());
    }

    public function testGtin13WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::gtin13());
    }

    public function testGtin14WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::gtin14());
    }

    public function testGtin8WillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::gtin8());
    }

    public function testHeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::height());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::image());
    }

    public function testIsAccessoryOrSparePartForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::isAccessoryOrSparePartFor());
    }

    public function testIsConsumableForWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::isConsumableFor());
    }

    public function testIsRelatedToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::isRelatedTo());
    }

    public function testIsSimilarToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::isSimilarTo());
    }

    public function testIsVariantOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::isVariantOf());
    }

    public function testItemConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::itemCondition());
    }

    public function testLogoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::logo());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::mainEntityOfPage());
    }

    public function testManufacturerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::manufacturer());
    }

    public function testModelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::model());
    }

    public function testMpnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::mpn());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::name());
    }

    public function testOffersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::offers());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::potentialAction());
    }

    public function testPredecessorOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::predecessorOf());
    }

    public function testProductIDWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::productID());
    }

    public function testProductionDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::productionDate());
    }

    public function testPurchaseDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::purchaseDate());
    }

    public function testReleaseDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::releaseDate());
    }

    public function testReviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::review());
    }

    public function testReviewsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::reviews());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::sameAs());
    }

    public function testSkuWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::sku());
    }

    public function testSuccessorOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::successorOf());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::url());
    }

    public function testWeightWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::weight());
    }

    public function testWidthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::width());
    }
}