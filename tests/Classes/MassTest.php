<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Mass;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MassTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MassTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Mass::schemaUrl(), "http://schema.org/Mass");
    }


}