<?php

namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\ApplicationCategory;
use NilPortugues\SchemaOrg\Properties\ApplicationSubCategory;
use NilPortugues\SchemaOrg\Properties\ApplicationSuite;
use NilPortugues\SchemaOrg\Properties\AvailableOnDevice;
use NilPortugues\SchemaOrg\Properties\CountriesNotSupported;
use NilPortugues\SchemaOrg\Properties\CountriesSupported;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\Device;
use NilPortugues\SchemaOrg\Properties\DownloadUrl;
use NilPortugues\SchemaOrg\Properties\FeatureList;
use NilPortugues\SchemaOrg\Properties\FileSize;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\InstallUrl;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\MemoryRequirements;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\OperatingSystem;
use NilPortugues\SchemaOrg\Properties\Permissions;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\ProcessorRequirements;
use NilPortugues\SchemaOrg\Properties\ReleaseNotes;
use NilPortugues\SchemaOrg\Properties\Requirements;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Screenshot;
use NilPortugues\SchemaOrg\Properties\SoftwareAddOn;
use NilPortugues\SchemaOrg\Properties\SoftwareHelp;
use NilPortugues\SchemaOrg\Properties\SoftwareRequirements;
use NilPortugues\SchemaOrg\Properties\SoftwareVersion;
use NilPortugues\SchemaOrg\Properties\StorageRequirements;
use NilPortugues\SchemaOrg\Properties\SupportingData;
use NilPortugues\SchemaOrg\Properties\Url;

/**
 * Classes SoftwareApplication.
 */
class SoftwareApplication
{
    /**
     * @var string
     */
    private static $schemaUrl = 'http://schema.org/SoftwareApplication';

    /**
     * Returns the URL of the current definition at http://schema.org.
     *
     * @return string
     */
    public static function schemaUrl()
    {
        return self::$schemaUrl;
    }

    /**
     * @return Mapping
     */
    public static function additionalType()
    {
        return AdditionalType::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function alternateName()
    {
        return AlternateName::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function applicationCategory()
    {
        return ApplicationCategory::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function applicationSubCategory()
    {
        return ApplicationSubCategory::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function applicationSuite()
    {
        return ApplicationSuite::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function availableOnDevice()
    {
        return AvailableOnDevice::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function countriesNotSupported()
    {
        return CountriesNotSupported::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function countriesSupported()
    {
        return CountriesSupported::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function description()
    {
        return Description::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function device()
    {
        return Device::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function downloadUrl()
    {
        return DownloadUrl::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function featureList()
    {
        return FeatureList::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function fileSize()
    {
        return FileSize::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function image()
    {
        return Image::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function installUrl()
    {
        return InstallUrl::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function mainEntityOfPage()
    {
        return MainEntityOfPage::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function memoryRequirements()
    {
        return MemoryRequirements::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function name()
    {
        return Name::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function operatingSystem()
    {
        return OperatingSystem::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function permissions()
    {
        return Permissions::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function potentialAction()
    {
        return PotentialAction::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function processorRequirements()
    {
        return ProcessorRequirements::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function releaseNotes()
    {
        return ReleaseNotes::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function requirements()
    {
        return Requirements::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function sameAs()
    {
        return SameAs::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function screenshot()
    {
        return Screenshot::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function softwareAddOn()
    {
        return SoftwareAddOn::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function softwareHelp()
    {
        return SoftwareHelp::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function softwareRequirements()
    {
        return SoftwareRequirements::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function softwareVersion()
    {
        return SoftwareVersion::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function storageRequirements()
    {
        return StorageRequirements::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function supportingData()
    {
        return SupportingData::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }
}
