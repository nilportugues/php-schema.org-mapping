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

use NilPortugues\SchemaOrg\Classes\Role;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes RoleTest.
 */
class RoleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Role::schemaUrl(), 'http://schema.org/Role');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::description());
    }

    public function testEndDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::endDate());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::name());
    }

    public function testNamedPositionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::namedPosition());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::potentialAction());
    }

    public function testRoleNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::roleName());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::sameAs());
    }

    public function testStartDateWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::startDate());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Role::url());
    }
}
