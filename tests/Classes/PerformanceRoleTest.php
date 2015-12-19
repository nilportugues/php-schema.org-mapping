<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\PerformanceRole;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PerformanceRoleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PerformanceRoleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PerformanceRole::schemaUrl(), "http://schema.org/PerformanceRole");
    }

    public function testCharacterNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PerformanceRole::characterName());
    }
}