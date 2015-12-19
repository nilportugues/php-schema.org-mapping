<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\DataFeedItem;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DataFeedItemTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DataFeedItemTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DataFeedItem::schemaUrl(), "http://schema.org/DataFeedItem");
    }

    public function testDateCreatedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataFeedItem::dateCreated());
    }

    public function testDateDeletedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataFeedItem::dateDeleted());
    }

    public function testDateModifiedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataFeedItem::dateModified());
    }

    public function testItemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DataFeedItem::item());
    }
}