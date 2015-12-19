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

use NilPortugues\SchemaOrg\Classes\APIReference;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes APIReferenceTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class APIReferenceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(APIReference::schemaUrl(), "http://schema.org/APIReference");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::alternateName());
    }

    public function testArticleBodyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::articleBody());
    }

    public function testArticleSectionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::articleSection());
    }

    public function testAssemblyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::assembly());
    }

    public function testAssemblyVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::assemblyVersion());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::description());
    }

    public function testExecutableLibraryNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::executableLibraryName());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::name());
    }

    public function testPageEndWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::pageEnd());
    }

    public function testPageStartWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::pageStart());
    }

    public function testPaginationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::pagination());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::potentialAction());
    }

    public function testProgrammingModelWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::programmingModel());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::sameAs());
    }

    public function testTargetPlatformWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::targetPlatform());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::url());
    }

    public function testWordCountWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, APIReference::wordCount());
    }
}