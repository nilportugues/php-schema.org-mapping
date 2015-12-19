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

use NilPortugues\SchemaOrg\Classes\MedicalScholarlyArticle;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalScholarlyArticleTest.
 */
class MedicalScholarlyArticleTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalScholarlyArticle::schemaUrl(), 'http://schema.org/MedicalScholarlyArticle');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::alternateName());
    }

    public function testArticleBodyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::articleBody());
    }

    public function testArticleSectionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::articleSection());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::name());
    }

    public function testPageEndWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::pageEnd());
    }

    public function testPageStartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::pageStart());
    }

    public function testPaginationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::pagination());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::potentialAction());
    }

    public function testPublicationTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::publicationType());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::url());
    }

    public function testWordCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalScholarlyArticle::wordCount());
    }
}
