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

use NilPortugues\SchemaOrg\Classes\Nerve;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes NerveTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class NerveTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Nerve::schemaUrl(), "http://schema.org/Nerve");
    }

    public function testBranchWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Nerve::branch());
    }

    public function testCodeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Nerve::code());
    }

    public function testGuidelineWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Nerve::guideline());
    }

    public function testMedicineSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Nerve::medicineSystem());
    }

    public function testNerveMotorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Nerve::nerveMotor());
    }

    public function testRecognizingAuthorityWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Nerve::recognizingAuthority());
    }

    public function testRelevantSpecialtyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Nerve::relevantSpecialty());
    }

    public function testSensoryUnitWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Nerve::sensoryUnit());
    }

    public function testSourcedFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Nerve::sourcedFrom());
    }

    public function testStudyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Nerve::study());
    }
}