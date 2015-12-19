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

use NilPortugues\SchemaOrg\Classes\AnatomicalStructure;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes AnatomicalStructureTest.
 */
class AnatomicalStructureTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(AnatomicalStructure::schemaUrl(), 'http://schema.org/AnatomicalStructure');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::alternateName());
    }

    public function testAssociatedPathophysiologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::associatedPathophysiology());
    }

    public function testBodyLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::bodyLocation());
    }

    public function testConnectedToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::connectedTo());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::description());
    }

    public function testDiagramWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::diagram());
    }

    public function testFunctionTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::functionType());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::name());
    }

    public function testPartOfSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::partOfSystem());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::potentialAction());
    }

    public function testRelatedConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::relatedCondition());
    }

    public function testRelatedTherapyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::relatedTherapy());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::sameAs());
    }

    public function testSubStructureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::subStructure());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalStructure::url());
    }
}
