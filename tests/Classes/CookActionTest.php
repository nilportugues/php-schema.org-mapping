<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\CookAction;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes CookActionTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class CookActionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(CookAction::schemaUrl(), "http://schema.org/CookAction");
    }

    public function testActionStatusWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::actionStatus());
    }

    public function testAgentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::agent());
    }

    public function testEndTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::endTime());
    }

    public function testErrorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::error());
    }

    public function testFoodEstablishmentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::foodEstablishment());
    }

    public function testFoodEventWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::foodEvent());
    }

    public function testInstrumentWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::instrument());
    }

    public function testLocationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::location());
    }

    public function testObjectTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::objectType());
    }

    public function testParticipantWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::participant());
    }

    public function testRecipeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::recipe());
    }

    public function testResultWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::result());
    }

    public function testStartTimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::startTime());
    }

    public function testTargetWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, CookAction::target());
    }
}