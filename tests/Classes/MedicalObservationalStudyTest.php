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

use NilPortugues\SchemaOrg\Classes\MedicalObservationalStudy;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalObservationalStudyTest.
 */
class MedicalObservationalStudyTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalObservationalStudy::schemaUrl(), 'http://schema.org/MedicalObservationalStudy');
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::study());
    }

    public function testStudyDesignWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalObservationalStudy::studyDesign());
    }
}
