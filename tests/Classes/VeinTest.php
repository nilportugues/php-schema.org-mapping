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

use NilPortugues\SchemaOrg\Classes\Vein;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes VeinTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class VeinTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Vein::schemaUrl(), "http://schema.org/Vein");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::alternateName());
    }

    public function testAssociatedPathophysiologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::associatedPathophysiology());
    }

    public function testBodyLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::bodyLocation());
    }

    public function testConnectedToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::connectedTo());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::description());
    }

    public function testDiagramWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::diagram());
    }

    public function testDrainsToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::drainsTo());
    }

    public function testFunctionTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::functionType());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::name());
    }

    public function testPartOfSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::partOfSystem());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::potentialAction());
    }

    public function testRegionDrainedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::regionDrained());
    }

    public function testRelatedConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::relatedCondition());
    }

    public function testRelatedTherapyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::relatedTherapy());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::sameAs());
    }

    public function testSubStructureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::subStructure());
    }

    public function testTributaryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::tributary());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Vein::url());
    }
}