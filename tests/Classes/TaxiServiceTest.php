<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\TaxiService;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes TaxiServiceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class TaxiServiceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(TaxiService::schemaUrl(), "http://schema.org/TaxiService");
    }


}