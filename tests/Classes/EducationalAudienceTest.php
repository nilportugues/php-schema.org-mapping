<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\EducationalAudience;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes EducationalAudienceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class EducationalAudienceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(EducationalAudience::schemaUrl(), "http://schema.org/EducationalAudience");
    }

    public function testEducationalRoleWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, EducationalAudience::educationalRole());
    }
}