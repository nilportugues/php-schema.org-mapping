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

use NilPortugues\SchemaOrg\Classes\TieAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TieActionTest.
 */
class TieActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(TieAction::schemaUrl(), 'http://schema.org/TieAction');
    }

    public function testActionStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TieAction::actionStatus());
    }

    public function testAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TieAction::agent());
    }

    public function testEndTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TieAction::endTime());
    }

    public function testErrorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TieAction::error());
    }

    public function testInstrumentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TieAction::instrument());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TieAction::location());
    }

    public function testObjectTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TieAction::objectType());
    }

    public function testParticipantWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TieAction::participant());
    }

    public function testResultWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TieAction::result());
    }

    public function testStartTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TieAction::startTime());
    }

    public function testTargetWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, TieAction::target());
    }
}
