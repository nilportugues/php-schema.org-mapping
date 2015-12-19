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

use NilPortugues\SchemaOrg\Classes\ItemList;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ItemListTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ItemListTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ItemList::schemaUrl(), "http://schema.org/ItemList");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemList::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemList::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemList::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemList::image());
    }

    public function testItemListElementWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemList::itemListElement());
    }

    public function testItemListOrderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemList::itemListOrder());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemList::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemList::name());
    }

    public function testNumberOfItemsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemList::numberOfItems());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemList::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemList::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ItemList::url());
    }
}