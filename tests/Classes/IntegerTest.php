<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Integer;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes IntegerTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class IntegerTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Integer::schemaUrl(), "http://schema.org/Integer");
    }


}