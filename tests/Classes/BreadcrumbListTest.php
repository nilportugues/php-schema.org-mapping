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

use NilPortugues\SchemaOrg\Classes\BreadcrumbList;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BreadcrumbListTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BreadcrumbListTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BreadcrumbList::schemaUrl(), "http://schema.org/BreadcrumbList");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BreadcrumbList::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BreadcrumbList::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BreadcrumbList::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BreadcrumbList::image());
    }

    public function testItemListElementWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BreadcrumbList::itemListElement());
    }

    public function testItemListOrderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BreadcrumbList::itemListOrder());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BreadcrumbList::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BreadcrumbList::name());
    }

    public function testNumberOfItemsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BreadcrumbList::numberOfItems());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BreadcrumbList::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BreadcrumbList::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BreadcrumbList::url());
    }
}