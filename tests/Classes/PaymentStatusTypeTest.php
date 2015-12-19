<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\PaymentStatusType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes PaymentStatusTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class PaymentStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(PaymentStatusType::schemaUrl(), "http://schema.org/PaymentStatusType");
    }


}