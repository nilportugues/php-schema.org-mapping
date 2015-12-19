<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\PeopleAudience;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PeopleAudienceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PeopleAudienceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PeopleAudience::schemaUrl(), "http://schema.org/PeopleAudience");
    }

    public function testHealthConditionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::healthCondition());
    }

    public function testRequiredGenderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::requiredGender());
    }

    public function testRequiredMaxAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::requiredMaxAge());
    }

    public function testRequiredMinAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::requiredMinAge());
    }

    public function testSuggestedGenderWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::suggestedGender());
    }

    public function testSuggestedMaxAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::suggestedMaxAge());
    }

    public function testSuggestedMinAgeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, PeopleAudience::suggestedMinAge());
    }
}