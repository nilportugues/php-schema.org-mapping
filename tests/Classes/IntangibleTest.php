<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Intangible;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes IntangibleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class IntangibleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Intangible::schemaUrl(), "http://schema.org/Intangible");
    }


}