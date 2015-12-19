<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\InteractionCounter;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes InteractionCounterTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class InteractionCounterTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(InteractionCounter::schemaUrl(), "http://schema.org/InteractionCounter");
    }

    public function testInteractionServiceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::interactionService());
    }

    public function testInteractionTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::interactionType());
    }

    public function testUserInteractionCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, InteractionCounter::userInteractionCount());
    }
}