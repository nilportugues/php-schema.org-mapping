<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\URL;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes URLTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class URLTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(URL::schemaUrl(), "http://schema.org/URL");
    }


}