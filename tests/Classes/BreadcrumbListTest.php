<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\BreadcrumbList;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BreadcrumbListTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BreadcrumbListTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BreadcrumbList::schemaUrl(), "http://schema.org/BreadcrumbList");
    }


}