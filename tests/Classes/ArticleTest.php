<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\Tests\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Classes\Article;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes ArticleTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class ArticleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Article::schemaUrl(), "http://schema.org/Article");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::alternateName());
    }

    public function testArticleBodyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::articleBody());
    }

    public function testArticleSectionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::articleSection());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::name());
    }

    public function testPageEndWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::pageEnd());
    }

    public function testPageStartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::pageStart());
    }

    public function testPaginationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::pagination());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::url());
    }

    public function testWordCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Article::wordCount());
    }
}