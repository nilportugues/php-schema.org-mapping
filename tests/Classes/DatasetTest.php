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

use NilPortugues\SchemaOrg\Classes\Dataset;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes DatasetTest.
 */
class DatasetTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(Dataset::schemaUrl(), 'http://schema.org/Dataset');
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::alternateName());
    }

    public function testCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::catalog());
    }

    public function testDatasetTimeIntervalWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::datasetTimeInterval());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::description());
    }

    public function testDistributionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::distribution());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::image());
    }

    public function testIncludedDataCatalogWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::includedDataCatalog());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::mainEntityOfPage());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::name());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::potentialAction());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::sameAs());
    }

    public function testSpatialWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::spatial());
    }

    public function testTemporalWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::temporal());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, Dataset::url());
    }
}
