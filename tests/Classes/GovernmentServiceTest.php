<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\GovernmentService;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GovernmentServiceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class GovernmentServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(GovernmentService::schemaUrl(), "http://schema.org/GovernmentService");
    }

    public function testServiceOperatorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, GovernmentService::serviceOperator());
    }
}