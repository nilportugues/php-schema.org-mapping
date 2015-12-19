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

use NilPortugues\SchemaOrg\Classes\LymphaticVessel;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes LymphaticVesselTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class LymphaticVesselTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(LymphaticVessel::schemaUrl(), "http://schema.org/LymphaticVessel");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::alternateName());
    }

    public function testAssociatedPathophysiologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::associatedPathophysiology());
    }

    public function testBodyLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::bodyLocation());
    }

    public function testConnectedToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::connectedTo());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::description());
    }

    public function testDiagramWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::diagram());
    }

    public function testFunctionTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::functionType());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::name());
    }

    public function testOriginatesFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::originatesFrom());
    }

    public function testPartOfSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::partOfSystem());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::potentialAction());
    }

    public function testRegionDrainedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::regionDrained());
    }

    public function testRelatedConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::relatedCondition());
    }

    public function testRelatedTherapyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::relatedTherapy());
    }

    public function testRunsToWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::runsTo());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::sameAs());
    }

    public function testSubStructureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::subStructure());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, LymphaticVessel::url());
    }
}