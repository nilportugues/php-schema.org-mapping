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

use NilPortugues\SchemaOrg\Classes\OfferCatalog;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OfferCatalogTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class OfferCatalogTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OfferCatalog::schemaUrl(), "http://schema.org/OfferCatalog");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OfferCatalog::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OfferCatalog::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OfferCatalog::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OfferCatalog::image());
    }

    public function testItemListElementWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OfferCatalog::itemListElement());
    }

    public function testItemListOrderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OfferCatalog::itemListOrder());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OfferCatalog::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OfferCatalog::name());
    }

    public function testNumberOfItemsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OfferCatalog::numberOfItems());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OfferCatalog::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OfferCatalog::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OfferCatalog::url());
    }
}