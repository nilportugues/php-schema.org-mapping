<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\BusinessAudience;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BusinessAudienceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BusinessAudienceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BusinessAudience::schemaUrl(), "http://schema.org/BusinessAudience");
    }

    public function testNumberOfEmployeesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusinessAudience::numberOfEmployees());
    }

    public function testYearlyRevenueWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusinessAudience::yearlyRevenue());
    }

    public function testYearsInOperationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, BusinessAudience::yearsInOperation());
    }
}