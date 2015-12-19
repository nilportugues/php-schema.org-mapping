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

use NilPortugues\SchemaOrg\Classes\SoftwareApplication;
use NilPortugues\SchemaOrg\Mapping;

/**
 * Classes SoftwareApplicationTest
 * @package NilPortugues\Tests\SchemaOrg\Classes
 */
class SoftwareApplicationTest extends \PHPUnit_Framework_TestCase
{
    public function testSchemaUrlReturnsExpectedUrl()
    {
        $this->assertEquals(SoftwareApplication::schemaUrl(), "http://schema.org/SoftwareApplication");
    }

    public function testAdditionalTypeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::additionalType());
    }

    public function testAlternateNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::alternateName());
    }

    public function testApplicationCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::applicationCategory());
    }

    public function testApplicationSubCategoryWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::applicationSubCategory());
    }

    public function testApplicationSuiteWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::applicationSuite());
    }

    public function testAvailableOnDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::availableOnDevice());
    }

    public function testCountriesNotSupportedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::countriesNotSupported());
    }

    public function testCountriesSupportedWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::countriesSupported());
    }

    public function testDescriptionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::description());
    }

    public function testDeviceWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::device());
    }

    public function testDownloadUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::downloadUrl());
    }

    public function testFeatureListWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::featureList());
    }

    public function testFileSizeWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::fileSize());
    }

    public function testImageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::image());
    }

    public function testInstallUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::installUrl());
    }

    public function testMainEntityOfPageWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::mainEntityOfPage());
    }

    public function testMemoryRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::memoryRequirements());
    }

    public function testNameWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::name());
    }

    public function testOperatingSystemWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::operatingSystem());
    }

    public function testPermissionsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::permissions());
    }

    public function testPotentialActionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::potentialAction());
    }

    public function testProcessorRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::processorRequirements());
    }

    public function testReleaseNotesWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::releaseNotes());
    }

    public function testRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::requirements());
    }

    public function testSameAsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::sameAs());
    }

    public function testScreenshotWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::screenshot());
    }

    public function testSoftwareAddOnWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::softwareAddOn());
    }

    public function testSoftwareHelpWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::softwareHelp());
    }

    public function testSoftwareRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::softwareRequirements());
    }

    public function testSoftwareVersionWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::softwareVersion());
    }

    public function testStorageRequirementsWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::storageRequirements());
    }

    public function testSupportingDataWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::supportingData());
    }

    public function testUrlWillReturnMappingObject()
    {
        $this->assertInstanceOf(Mapping::class, SoftwareApplication::url());
    }
}