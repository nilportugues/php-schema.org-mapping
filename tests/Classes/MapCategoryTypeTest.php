<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\MapCategoryType;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MapCategoryTypeTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MapCategoryTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MapCategoryType::schemaUrl(), "http://schema.org/MapCategoryType");
    }


}