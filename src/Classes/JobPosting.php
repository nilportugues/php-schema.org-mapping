<?php
namespace NilPortugues\SchemaOrg\Classes;

use NilPortugues\SchemaOrg\Mapping;
use NilPortugues\SchemaOrg\Properties\AdditionalType;
use NilPortugues\SchemaOrg\Properties\AlternateName;
use NilPortugues\SchemaOrg\Properties\BaseSalary;
use NilPortugues\SchemaOrg\Properties\Benefits;
use NilPortugues\SchemaOrg\Properties\DatePosted;
use NilPortugues\SchemaOrg\Properties\Description;
use NilPortugues\SchemaOrg\Properties\EducationRequirements;
use NilPortugues\SchemaOrg\Properties\EmploymentType;
use NilPortugues\SchemaOrg\Properties\ExperienceRequirements;
use NilPortugues\SchemaOrg\Properties\HiringOrganization;
use NilPortugues\SchemaOrg\Properties\Image;
use NilPortugues\SchemaOrg\Properties\IncentiveCompensation;
use NilPortugues\SchemaOrg\Properties\Incentives;
use NilPortugues\SchemaOrg\Properties\Industry;
use NilPortugues\SchemaOrg\Properties\JobBenefits;
use NilPortugues\SchemaOrg\Properties\JobLocation;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPage;
use NilPortugues\SchemaOrg\Properties\Name;
use NilPortugues\SchemaOrg\Properties\OccupationalCategory;
use NilPortugues\SchemaOrg\Properties\PotentialAction;
use NilPortugues\SchemaOrg\Properties\Qualifications;
use NilPortugues\SchemaOrg\Properties\Responsibilities;
use NilPortugues\SchemaOrg\Properties\SalaryCurrency;
use NilPortugues\SchemaOrg\Properties\SameAs;
use NilPortugues\SchemaOrg\Properties\Skills;
use NilPortugues\SchemaOrg\Properties\SpecialCommitments;
use NilPortugues\SchemaOrg\Properties\Title;
use NilPortugues\SchemaOrg\Properties\Url;
use NilPortugues\SchemaOrg\Properties\WorkHours;

/**
 * Classes JobPosting
 * @package NilPortugues\SchemaOrg\Classes
 *
 * A listing that describes a job opening in a certain organization.
 */
class JobPosting
{
    /**
     * @var string
     */
    private static $schemaUrl = "http://schema.org/JobPosting";

   /**
    * Returns the URL of the current definition at http://schema.org
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
    public static function baseSalary()
    {
        return BaseSalary::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function benefits()
    {
        return Benefits::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function datePosted()
    {
        return DatePosted::create(self::schemaUrl());
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
    public static function educationRequirements()
    {
        return EducationRequirements::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function employmentType()
    {
        return EmploymentType::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function experienceRequirements()
    {
        return ExperienceRequirements::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function hiringOrganization()
    {
        return HiringOrganization::create(self::schemaUrl());
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
    public static function incentiveCompensation()
    {
        return IncentiveCompensation::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function incentives()
    {
        return Incentives::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function industry()
    {
        return Industry::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function jobBenefits()
    {
        return JobBenefits::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function jobLocation()
    {
        return JobLocation::create(self::schemaUrl());
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
    public static function name()
    {
        return Name::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function occupationalCategory()
    {
        return OccupationalCategory::create(self::schemaUrl());
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
    public static function qualifications()
    {
        return Qualifications::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function responsibilities()
    {
        return Responsibilities::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function salaryCurrency()
    {
        return SalaryCurrency::create(self::schemaUrl());
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
    public static function skills()
    {
        return Skills::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function specialCommitments()
    {
        return SpecialCommitments::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function title()
    {
        return Title::create(self::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function url()
    {
        return Url::create(Thing::schemaUrl());
    }

   /**
    * @return Mapping
    */
    public static function workHours()
    {
        return WorkHours::create(self::schemaUrl());
    }
}