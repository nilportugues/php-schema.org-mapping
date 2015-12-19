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

use NilPortugues\SchemaOrg\Classes\ReceiveAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ReceiveActionTest.
 */
class ReceiveActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ReceiveAction::schemaUrl(), 'http://schema.org/ReceiveAction');
    }

    public function testActionStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::actionStatus());
    }

    public function testAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::agent());
    }

    public function testDeliveryMethodWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::deliveryMethod());
    }

    public function testEndTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::endTime());
    }

    public function testErrorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::error());
    }

    public function testInstrumentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::instrument());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::location());
    }

    public function testObjectTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::objectType());
    }

    public function testParticipantWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::participant());
    }

    public function testResultWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::result());
    }

    public function testSenderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::sender());
    }

    public function testStartTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::startTime());
    }

    public function testTargetWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ReceiveAction::target());
    }
}
