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

use NilPortugues\SchemaOrg\Classes\ListItem;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ListItemTest.
 */
class ListItemTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ListItem::schemaUrl(), 'http://schema.org/ListItem');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::image());
    }

    public function testItemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::item());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::name());
    }

    public function testNextItemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::nextItem());
    }

    public function testPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::position());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::potentialAction());
    }

    public function testPreviousItemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::previousItem());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ListItem::url());
    }
}
