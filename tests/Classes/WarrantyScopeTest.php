<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\WarrantyScope;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes WarrantyScopeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class WarrantyScopeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(WarrantyScope::schemaUrl(), "http://schema.org/WarrantyScope");
    }


}