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

use NilPortugues\SchemaOrg\Classes\PalliativeProcedure;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PalliativeProcedureTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PalliativeProcedureTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PalliativeProcedure::schemaUrl(), "http://schema.org/PalliativeProcedure");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::additionalType());
    }

    public function testAdverseOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::adverseOutcome());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::alternateName());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::code());
    }

    public function testContraindicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::contraindication());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::description());
    }

    public function testDuplicateTherapyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::duplicateTherapy());
    }

    public function testFollowupWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::followup());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::guideline());
    }

    public function testHowPerformedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::howPerformed());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::image());
    }

    public function testIndicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::indication());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::mainEntityOfPage());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::medicineSystem());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::potentialAction());
    }

    public function testPreparationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::preparation());
    }

    public function testProcedureTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::procedureType());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::relevantSpecialty());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::sameAs());
    }

    public function testSeriousAdverseOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::seriousAdverseOutcome());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::study());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PalliativeProcedure::url());
    }
}