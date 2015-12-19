<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Specialty;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes SpecialtyTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class SpecialtyTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Specialty::schemaUrl(), "http://schema.org/Specialty");
    }


}