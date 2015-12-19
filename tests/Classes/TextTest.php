<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Text;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TextTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class TextTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Text::schemaUrl(), "http://schema.org/Text");
    }


}