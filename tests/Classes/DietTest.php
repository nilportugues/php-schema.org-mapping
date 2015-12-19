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

use NilPortugues\SchemaOrg\Classes\Diet;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DietTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class DietTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Diet::schemaUrl(), "http://schema.org/Diet");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::additionalType());
    }

    public function testAdverseOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::adverseOutcome());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::alternateName());
    }

    public function testContraindicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::contraindication());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::description());
    }

    public function testDietFeaturesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::dietFeatures());
    }

    public function testDuplicateTherapyWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::duplicateTherapy());
    }

    public function testEndorsersWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::endorsers());
    }

    public function testExpertConsiderationsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::expertConsiderations());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::image());
    }

    public function testIndicationWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::indication());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::name());
    }

    public function testOverviewWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::overview());
    }

    public function testPhysiologicalBenefitsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::physiologicalBenefits());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::potentialAction());
    }

    public function testProprietaryNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::proprietaryName());
    }

    public function testRisksWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::risks());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::sameAs());
    }

    public function testSeriousAdverseOutcomeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::seriousAdverseOutcome());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Diet::url());
    }
}