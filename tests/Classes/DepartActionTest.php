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

use NilPortugues\SchemaOrg\Classes\DepartAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DepartActionTest.
 */
class DepartActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DepartAction::schemaUrl(), 'http://schema.org/DepartAction');
    }

    public function testActionStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DepartAction::actionStatus());
    }

    public function testAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DepartAction::agent());
    }

    public function testEndTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DepartAction::endTime());
    }

    public function testErrorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DepartAction::error());
    }

    public function testInstrumentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DepartAction::instrument());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DepartAction::location());
    }

    public function testObjectTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DepartAction::objectType());
    }

    public function testParticipantWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DepartAction::participant());
    }

    public function testResultWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DepartAction::result());
    }

    public function testStartTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DepartAction::startTime());
    }

    public function testTargetWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DepartAction::target());
    }
}
