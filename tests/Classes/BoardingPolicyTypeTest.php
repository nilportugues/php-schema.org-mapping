<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\BoardingPolicyType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes BoardingPolicyTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class BoardingPolicyTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(BoardingPolicyType::schemaUrl(), "http://schema.org/BoardingPolicyType");
    }


}