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

use NilPortugues\SchemaOrg\Classes\DrugCost;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DrugCostTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DrugCostTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DrugCost::schemaUrl(), "http://schema.org/DrugCost");
    }

    public function testApplicableLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugCost::applicableLocation());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugCost::code());
    }

    public function testCostCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugCost::costCategory());
    }

    public function testCostCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugCost::costCurrency());
    }

    public function testCostOriginWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugCost::costOrigin());
    }

    public function testCostPerUnitWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugCost::costPerUnit());
    }

    public function testDrugUnitWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugCost::drugUnit());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugCost::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugCost::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugCost::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugCost::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugCost::study());
    }
}