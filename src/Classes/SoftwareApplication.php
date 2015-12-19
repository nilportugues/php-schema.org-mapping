<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\SchemaClass;

/**
 * METHODSTART.
 *
 * @method static \NilPortugues\SchemaOrg\Properties\ApplicationCategoryProperty applicationCategory()
 * @method static \NilPortugues\SchemaOrg\Properties\ApplicationSubCategoryProperty applicationSubCategory()
 * @method static \NilPortugues\SchemaOrg\Properties\ApplicationSuiteProperty applicationSuite()
 * @method static \NilPortugues\SchemaOrg\Properties\CountriesNotSupportedProperty countriesNotSupported()
 * @method static \NilPortugues\SchemaOrg\Properties\CountriesSupportedProperty countriesSupported()
 * @method static \NilPortugues\SchemaOrg\Properties\DeviceProperty device()
 * @method static \NilPortugues\SchemaOrg\Properties\AvailableOnDeviceProperty availableOnDevice()
 * @method static \NilPortugues\SchemaOrg\Properties\DownloadUrlProperty downloadUrl()
 * @method static \NilPortugues\SchemaOrg\Properties\FeatureListProperty featureList()
 * @method static \NilPortugues\SchemaOrg\Properties\FileSizeProperty fileSize()
 * @method static \NilPortugues\SchemaOrg\Properties\InstallUrlProperty installUrl()
 * @method static \NilPortugues\SchemaOrg\Properties\MemoryRequirementsProperty memoryRequirements()
 * @method static \NilPortugues\SchemaOrg\Properties\OperatingSystemProperty operatingSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\PermissionsProperty permissions()
 * @method static \NilPortugues\SchemaOrg\Properties\ProcessorRequirementsProperty processorRequirements()
 * @method static \NilPortugues\SchemaOrg\Properties\ReleaseNotesProperty releaseNotes()
 * @method static \NilPortugues\SchemaOrg\Properties\RequirementsProperty requirements()
 * @method static \NilPortugues\SchemaOrg\Properties\SoftwareRequirementsProperty softwareRequirements()
 * @method static \NilPortugues\SchemaOrg\Properties\ScreenshotProperty screenshot()
 * @method static \NilPortugues\SchemaOrg\Properties\SoftwareVersionProperty softwareVersion()
 * @method static \NilPortugues\SchemaOrg\Properties\StorageRequirementsProperty storageRequirements()
 * @method static \NilPortugues\SchemaOrg\Properties\SupportingDataProperty supportingData()
 * @method static \NilPortugues\SchemaOrg\Properties\SoftwareAddOnProperty softwareAddOn()
 * @method static \NilPortugues\SchemaOrg\Properties\SoftwareHelpProperty softwareHelp()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * METHODEND.
 *
 * A software application.
 */
class SoftwareApplication extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/SoftwareApplication';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'applicationCategory' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ApplicationCategoryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'applicationSubCategory' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ApplicationSubCategoryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'applicationSuite' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ApplicationSuiteProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'availableOnDevice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AvailableOnDeviceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'countriesNotSupported' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CountriesNotSupportedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'countriesSupported' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CountriesSupportedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'device' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DeviceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'downloadUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DownloadUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'featureList' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FeatureListProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'fileSize' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\FileSizeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'installUrl' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InstallUrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'memoryRequirements' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MemoryRequirementsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'operatingSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OperatingSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'permissions' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PermissionsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'processorRequirements' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProcessorRequirementsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'releaseNotes' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ReleaseNotesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'requirements' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RequirementsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'screenshot' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ScreenshotProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'softwareAddOn' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SoftwareAddOnProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'softwareHelp' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SoftwareHelpProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'softwareRequirements' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SoftwareRequirementsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'softwareVersion' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SoftwareVersionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'storageRequirements' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StorageRequirementsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'supportingData' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SupportingDataProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareApplication',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
