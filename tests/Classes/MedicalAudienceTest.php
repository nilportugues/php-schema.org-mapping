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

use NilPortugues\SchemaOrg\Classes\MedicalAudience;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalAudienceTest.
 */
class MedicalAudienceTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalAudience::schemaUrl(), 'http://schema.org/MedicalAudience');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::alternateName());
    }

    public function testAudienceTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::audienceType());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::description());
    }

    public function testGeographicAreaWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::geographicArea());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::image());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::sameAs());
    }

    public function testSupersededByWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::supersededBy());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalAudience::url());
    }
}
