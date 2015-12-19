<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\ReservationStatusType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ReservationStatusTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ReservationStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ReservationStatusType::schemaUrl(), "http://schema.org/ReservationStatusType");
    }


}