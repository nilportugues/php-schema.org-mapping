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

use NilPortugues\SchemaOrg\Classes\SoftwareSourceCode;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes SoftwareSourceCodeTest.
 */
class SoftwareSourceCodeTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(SoftwareSourceCode::schemaUrl(), 'http://schema.org/SoftwareSourceCode');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::alternateName());
    }

    public function testCodeRepositoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::codeRepository());
    }

    public function testCodeSampleTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::codeSampleType());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::description());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::potentialAction());
    }

    public function testProgrammingLanguageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::programmingLanguage());
    }

    public function testRuntimeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::runtime());
    }

    public function testRuntimePlatformWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::runtimePlatform());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::sameAs());
    }

    public function testSampleTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::sampleType());
    }

    public function testTargetProductWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::targetProduct());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareSourceCode::url());
    }
}
