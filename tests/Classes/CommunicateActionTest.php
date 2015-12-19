<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\CommunicateAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes CommunicateActionTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class CommunicateActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(CommunicateAction::schemaUrl(), "http://schema.org/CommunicateAction");
    }

    public function testAboutWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::about());
    }

    public function testActionStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::actionStatus());
    }

    public function testAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::agent());
    }

    public function testEndTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::endTime());
    }

    public function testErrorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::error());
    }

    public function testInLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::inLanguage());
    }

    public function testInstrumentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::instrument());
    }

    public function testLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::language());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::location());
    }

    public function testObjectTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::objectType());
    }

    public function testParticipantWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::participant());
    }

    public function testRecipientWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::recipient());
    }

    public function testResultWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::result());
    }

    public function testStartTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::startTime());
    }

    public function testTargetWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CommunicateAction::target());
    }
}