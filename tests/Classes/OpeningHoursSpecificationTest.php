<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\OpeningHoursSpecification;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OpeningHoursSpecificationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class OpeningHoursSpecificationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OpeningHoursSpecification::schemaUrl(), "http://schema.org/OpeningHoursSpecification");
    }

    public function testClosesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OpeningHoursSpecification::closes());
    }

    public function testDayOfWeekWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OpeningHoursSpecification::dayOfWeek());
    }

    public function testOpensWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OpeningHoursSpecification::opens());
    }

    public function testValidFromWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OpeningHoursSpecification::validFrom());
    }

    public function testValidThroughWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, OpeningHoursSpecification::validThrough());
    }
}