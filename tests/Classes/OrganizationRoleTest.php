<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\OrganizationRole;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes OrganizationRoleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class OrganizationRoleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(OrganizationRole::schemaUrl(), "http://schema.org/OrganizationRole");
    }


}