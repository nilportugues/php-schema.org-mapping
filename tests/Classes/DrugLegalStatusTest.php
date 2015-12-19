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

use NilPortugues\SchemaOrg\Classes\DrugLegalStatus;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DrugLegalStatusTest.
 */
class DrugLegalStatusTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DrugLegalStatus::schemaUrl(), 'http://schema.org/DrugLegalStatus');
    }

    public function testApplicableLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugLegalStatus::applicableLocation());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugLegalStatus::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugLegalStatus::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugLegalStatus::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugLegalStatus::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugLegalStatus::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DrugLegalStatus::study());
    }
}
