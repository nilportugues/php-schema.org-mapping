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

use NilPortugues\SchemaOrg\Classes\EmployeeRole;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes EmployeeRoleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class EmployeeRoleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(EmployeeRole::schemaUrl(), "http://schema.org/EmployeeRole");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::alternateName());
    }

    public function testBaseSalaryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::baseSalary());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::description());
    }

    public function testEndDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::endDate());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::name());
    }

    public function testNamedPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::namedPosition());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::potentialAction());
    }

    public function testRoleNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::roleName());
    }

    public function testSalaryCurrencyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::salaryCurrency());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::sameAs());
    }

    public function testStartDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::startDate());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EmployeeRole::url());
    }
}