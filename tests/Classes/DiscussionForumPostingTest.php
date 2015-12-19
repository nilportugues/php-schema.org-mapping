<?php
namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\DiscussionForumPosting;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DiscussionForumPostingTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DiscussionForumPostingTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(DiscussionForumPosting::schemaUrl(), "http://schema.org/DiscussionForumPosting");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::alternateName());
    }

    public function testArticleBodyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::articleBody());
    }

    public function testArticleSectionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::articleSection());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::name());
    }

    public function testPageEndWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::pageEnd());
    }

    public function testPageStartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::pageStart());
    }

    public function testPaginationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::pagination());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::url());
    }

    public function testWordCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, DiscussionForumPosting::wordCount());
    }
}