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

use NilPortugues\SchemaOrg\Classes\TherapeuticProcedure;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TherapeuticProcedureTest.
 */
class TherapeuticProcedureTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(TherapeuticProcedure::schemaUrl(), 'http://schema.org/TherapeuticProcedure');
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TherapeuticProcedure::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TherapeuticProcedure::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TherapeuticProcedure::medicineSystem());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TherapeuticProcedure::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TherapeuticProcedure::relevantSpecialty());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TherapeuticProcedure::study());
    }
}
