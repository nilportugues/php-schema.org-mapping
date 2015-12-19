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

use NilPortugues\SchemaOrg\Classes\AnatomicalSystem;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes AnatomicalSystemTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class AnatomicalSystemTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(AnatomicalSystem::schemaUrl(), "http://schema.org/AnatomicalSystem");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::alternateName());
    }

    public function testAssociatedPathophysiologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::associatedPathophysiology());
    }

    public function testComprisedOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::comprisedOf());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::potentialAction());
    }

    public function testRelatedConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::relatedCondition());
    }

    public function testRelatedStructureWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::relatedStructure());
    }

    public function testRelatedTherapyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::relatedTherapy());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, AnatomicalSystem::url());
    }
}