<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Comment;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes CommentTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class CommentTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Comment::schemaUrl(), "http://schema.org/Comment");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Comment::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Comment::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Comment::description());
    }

    public function testDownvoteCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Comment::downvoteCount());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Comment::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Comment::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Comment::name());
    }

    public function testParentItemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Comment::parentItem());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Comment::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Comment::sameAs());
    }

    public function testUpvoteCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Comment::upvoteCount());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Comment::url());
    }
}