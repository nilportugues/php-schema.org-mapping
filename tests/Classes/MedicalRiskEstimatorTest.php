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

use NilPortugues\SchemaOrg\Classes\MedicalRiskEstimator;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes MedicalRiskEstimatorTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class MedicalRiskEstimatorTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(MedicalRiskEstimator::schemaUrl(), "http://schema.org/MedicalRiskEstimator");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskEstimator::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskEstimator::alternateName());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskEstimator::description());
    }

    public function testEstimatesRiskOfWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskEstimator::estimatesRiskOf());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskEstimator::image());
    }

    public function testIncludedRiskFactorWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskEstimator::includedRiskFactor());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskEstimator::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskEstimator::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskEstimator::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskEstimator::sameAs());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, MedicalRiskEstimator::url());
    }
}