<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Taxi;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TaxiTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class TaxiTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Taxi::schemaUrl(), "http://schema.org/Taxi");
    }


}