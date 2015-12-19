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

use NilPortugues\SchemaOrg\Classes\MedicalTrialDesign;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalTrialDesignTest.
 */
class MedicalTrialDesignTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalTrialDesign::schemaUrl(), 'http://schema.org/MedicalTrialDesign');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrialDesign::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrialDesign::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrialDesign::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrialDesign::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrialDesign::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrialDesign::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrialDesign::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrialDesign::sameAs());
    }

    public function testSupersededByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrialDesign::supersededBy());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalTrialDesign::url());
    }
}
