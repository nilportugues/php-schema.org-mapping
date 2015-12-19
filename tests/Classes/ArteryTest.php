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

use NilPortugues\SchemaOrg\Classes\Artery;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ArteryTest.
 */
class ArteryTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Artery::schemaUrl(), 'http://schema.org/Artery');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::alternateName());
    }

    public function testArterialBranchWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::arterialBranch());
    }

    public function testAssociatedPathophysiologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::associatedPathophysiology());
    }

    public function testBodyLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::bodyLocation());
    }

    public function testConnectedToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::connectedTo());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::description());
    }

    public function testDiagramWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::diagram());
    }

    public function testFunctionTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::functionType());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::name());
    }

    public function testPartOfSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::partOfSystem());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::potentialAction());
    }

    public function testRelatedConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::relatedCondition());
    }

    public function testRelatedTherapyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::relatedTherapy());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::sameAs());
    }

    public function testSourceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::source());
    }

    public function testSubStructureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::subStructure());
    }

    public function testSupplyToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::supplyTo());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Artery::url());
    }
}
