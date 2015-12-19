<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Boolean;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BooleanTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BooleanTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Boolean::schemaUrl(), "http://schema.org/Boolean");
    }


}