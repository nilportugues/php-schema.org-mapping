<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\ProgramMembership;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ProgramMembershipTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ProgramMembershipTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ProgramMembership::schemaUrl(), "http://schema.org/ProgramMembership");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::description());
    }

    public function testHostingOrganizationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::hostingOrganization());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::mainEntityOfPage());
    }

    public function testMemberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::member());
    }

    public function testMembersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::members());
    }

    public function testMembershipNumberWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::membershipNumber());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::potentialAction());
    }

    public function testProgramNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::programName());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, ProgramMembership::url());
    }
}