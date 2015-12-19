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
 * Classes ProductModelTest.
 */
class ProductModelTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ProductModel::schemaUrl(), 'http://schema.org/ProductModel');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::image());
    }

    public function testIsVariantOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::isVariantOf());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::potentialAction());
    }

    public function testPredecessorOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::predecessorOf());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::sameAs());
    }

    public function testSuccessorOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::successorOf());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProductModel::url());
    }
}
