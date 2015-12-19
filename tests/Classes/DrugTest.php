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

use NilPortugues\SchemaOrg\Classes\Drug;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DrugTest.
 */
class DrugTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Drug::schemaUrl(), 'http://schema.org/Drug');
    }

    public function testActiveIngredientWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::activeIngredient());
    }

    public function testAdministrationRouteWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::administrationRoute());
    }

    public function testAlcoholWarningWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::alcoholWarning());
    }

    public function testAvailableStrengthWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::availableStrength());
    }

    public function testBreastfeedingWarningWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::breastfeedingWarning());
    }

    public function testClinicalPharmacologyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::clinicalPharmacology());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::code());
    }

    public function testCostWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::cost());
    }

    public function testDosageFormWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::dosageForm());
    }

    public function testDoseScheduleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::doseSchedule());
    }

    public function testDrugClassWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::drugClass());
    }

    public function testFoodWarningWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::foodWarning());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::guideline());
    }

    public function testInteractingDrugWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::interactingDrug());
    }

    public function testIsAvailableGenericallyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::isAvailableGenerically());
    }

    public function testIsProprietaryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::isProprietary());
    }

    public function testLabelDetailsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::labelDetails());
    }

    public function testLegalStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::legalStatus());
    }

    public function testManufacturerWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::manufacturer());
    }

    public function testMechanismOfActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::mechanismOfAction());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::medicineSystem());
    }

    public function testNonProprietaryNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::nonProprietaryName());
    }

    public function testOverdosageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::overdosage());
    }

    public function testPregnancyCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::pregnancyCategory());
    }

    public function testPregnancyWarningWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::pregnancyWarning());
    }

    public function testPrescribingInfoWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::prescribingInfo());
    }

    public function testPrescriptionStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::prescriptionStatus());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::recognizingAuthority());
    }

    public function testRelatedDrugWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::relatedDrug());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::study());
    }

    public function testWarningWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Drug::warning());
    }
}
