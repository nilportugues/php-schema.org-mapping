<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\ActionStatusType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ActionStatusTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ActionStatusTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(ActionStatusType::schemaUrl(), "http://schema.org/ActionStatusType");
    }


}