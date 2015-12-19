<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\ContactPointOption;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ContactPointOptionTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ContactPointOptionTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ContactPointOption::schemaUrl(), "http://schema.org/ContactPointOption");
    }


}