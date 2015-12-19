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

use NilPortugues\SchemaOrg\Classes\PhysicalActivity;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PhysicalActivityTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PhysicalActivityTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PhysicalActivity::schemaUrl(), "http://schema.org/PhysicalActivity");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::additionalType());
    }

    public function testAdverseOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::adverseOutcome());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::alternateName());
    }

    public function testAssociatedAnatomyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::associatedAnatomy());
    }

    public function testCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::category());
    }

    public function testContraindicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::contraindication());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::description());
    }

    public function testDuplicateTherapyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::duplicateTherapy());
    }

    public function testEpidemiologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::epidemiology());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::image());
    }

    public function testIndicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::indication());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::name());
    }

    public function testPathophysiologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::pathophysiology());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::sameAs());
    }

    public function testSeriousAdverseOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::seriousAdverseOutcome());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PhysicalActivity::url());
    }
}