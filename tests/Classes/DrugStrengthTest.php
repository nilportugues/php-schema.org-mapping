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

use NilPortugues\SchemaOrg\Classes\DrugStrength;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DrugStrengthTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DrugStrengthTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DrugStrength::schemaUrl(), "http://schema.org/DrugStrength");
    }

    public function testActiveIngredientWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugStrength::activeIngredient());
    }

    public function testAvailableInWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugStrength::availableIn());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugStrength::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugStrength::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugStrength::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugStrength::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugStrength::relevantSpecialty());
    }

    public function testStrengthUnitWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugStrength::strengthUnit());
    }

    public function testStrengthValueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugStrength::strengthValue());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugStrength::study());
    }
}