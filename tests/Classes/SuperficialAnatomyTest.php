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

use NilPortugues\SchemaOrg\Classes\SuperficialAnatomy;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes SuperficialAnatomyTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class SuperficialAnatomyTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(SuperficialAnatomy::schemaUrl(), "http://schema.org/SuperficialAnatomy");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::alternateName());
    }

    public function testAssociatedPathophysiologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::associatedPathophysiology());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::potentialAction());
    }

    public function testRelatedAnatomyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::relatedAnatomy());
    }

    public function testRelatedConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::relatedCondition());
    }

    public function testRelatedTherapyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::relatedTherapy());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::sameAs());
    }

    public function testSignificanceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::significance());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SuperficialAnatomy::url());
    }
}