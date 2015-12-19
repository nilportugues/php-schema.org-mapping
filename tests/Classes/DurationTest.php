<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Duration;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DurationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DurationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Duration::schemaUrl(), "http://schema.org/Duration");
    }


}