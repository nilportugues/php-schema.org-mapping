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

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty;
use NilPortugues\SchemaOrg\Properties\AlternateNameProperty;
use NilPortugues\SchemaOrg\Properties\ApplicationCategoryProperty;
use NilPortugues\SchemaOrg\Properties\ApplicationSubCategoryProperty;
use NilPortugues\SchemaOrg\Properties\ApplicationSuiteProperty;
use NilPortugues\SchemaOrg\Properties\AvailableOnDeviceProperty;
use NilPortugues\SchemaOrg\Properties\CountriesNotSupportedProperty;
use NilPortugues\SchemaOrg\Properties\CountriesSupportedProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\DeviceProperty;
use NilPortugues\SchemaOrg\Properties\DownloadUrlProperty;
use NilPortugues\SchemaOrg\Properties\FeatureListProperty;
use NilPortugues\SchemaOrg\Properties\FileSizeProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\InstallUrlProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\MemoryRequirementsProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\OperatingSystemProperty;
use NilPortugues\SchemaOrg\Properties\PermissionsProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\ProcessorRequirementsProperty;
use NilPortugues\SchemaOrg\Properties\ReleaseNotesProperty;
use NilPortugues\SchemaOrg\Properties\RequirementsProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\ScreenshotProperty;
use NilPortugues\SchemaOrg\Properties\SoftwareAddOnProperty;
use NilPortugues\SchemaOrg\Properties\SoftwareHelpProperty;
use NilPortugues\SchemaOrg\Properties\SoftwareRequirementsProperty;
use NilPortugues\SchemaOrg\Properties\SoftwareVersionProperty;
use NilPortugues\SchemaOrg\Properties\StorageRequirementsProperty;
use NilPortugues\SchemaOrg\Properties\SupportingDataProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes SoftwareApplication.
 */
class SoftwareApplication extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/SoftwareApplication';

    /**
     * @return Mapping
     */
    public static function additionalType()
    {
        return AdditionalTypeProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateNameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function applicationCategory()
    {
        return ApplicationCategoryProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function applicationSubCategory()
    {
        return ApplicationSubCategoryProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function applicationSuite()
    {
        return ApplicationSuiteProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function availableOnDevice()
    {
        return AvailableOnDeviceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function countriesNotSupported()
    {
        return CountriesNotSupportedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function countriesSupported()
    {
        return CountriesSupportedProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function description()
    {
        return DescriptionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function device()
    {
        return DeviceProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function downloadUrl()
    {
        return DownloadUrlProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function featureList()
    {
        return FeatureListProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function fileSize()
    {
        return FileSizeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return ImageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function installUrl()
    {
        return InstallUrlProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPageProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function memoryRequirements()
    {
        return MemoryRequirementsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function operatingSystem()
    {
        return OperatingSystemProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function permissions()
    {
        return PermissionsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialActionProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function processorRequirements()
    {
        return ProcessorRequirementsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function releaseNotes()
    {
        return ReleaseNotesProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function requirements()
    {
        return RequirementsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAsProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function screenshot()
    {
        return ScreenshotProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function softwareAddOn()
    {
        return SoftwareAddOnProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function softwareHelp()
    {
        return SoftwareHelpProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function softwareRequirements()
    {
        return SoftwareRequirementsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function softwareVersion()
    {
        return SoftwareVersionProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function storageRequirements()
    {
        return StorageRequirementsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function supportingData()
    {
        return SupportingDataProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }
}
