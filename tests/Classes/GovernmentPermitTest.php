<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\GovernmentPermit;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes GovernmentPermitTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class GovernmentPermitTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(GovernmentPermit::schemaUrl(), "http://schema.org/GovernmentPermit");
    }


}