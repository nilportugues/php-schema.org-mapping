<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\BookFormatType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BookFormatTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BookFormatTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BookFormatType::schemaUrl(), "http://schema.org/BookFormatType");
    }


}