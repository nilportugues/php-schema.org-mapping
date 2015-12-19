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

use NilPortugues\SchemaOrg\Classes\DiagnosticProcedure;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DiagnosticProcedureTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DiagnosticProcedureTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DiagnosticProcedure::schemaUrl(), "http://schema.org/DiagnosticProcedure");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::additionalType());
    }

    public function testAffectedByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::affectedBy());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::code());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::description());
    }

    public function testFollowupWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::followup());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::guideline());
    }

    public function testHowPerformedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::howPerformed());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::name());
    }

    public function testNormalRangeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::normalRange());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::potentialAction());
    }

    public function testPreparationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::preparation());
    }

    public function testProcedureTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::procedureType());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::relevantSpecialty());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::sameAs());
    }

    public function testSignDetectedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::signDetected());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::study());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::url());
    }

    public function testUsedToDiagnoseWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::usedToDiagnose());
    }

    public function testUsesDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiagnosticProcedure::usesDevice());
    }
}