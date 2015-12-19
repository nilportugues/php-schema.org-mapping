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
use NilPortugues\SchemaOrg\Properties\BaseSalaryProperty;
use NilPortugues\SchemaOrg\Properties\BenefitsProperty;
use NilPortugues\SchemaOrg\Properties\DatePostedProperty;
use NilPortugues\SchemaOrg\Properties\DescriptionProperty;
use NilPortugues\SchemaOrg\Properties\EducationRequirementsProperty;
use NilPortugues\SchemaOrg\Properties\EmploymentTypeProperty;
use NilPortugues\SchemaOrg\Properties\ExperienceRequirementsProperty;
use NilPortugues\SchemaOrg\Properties\HiringOrganizationProperty;
use NilPortugues\SchemaOrg\Properties\ImageProperty;
use NilPortugues\SchemaOrg\Properties\IncentiveCompensationProperty;
use NilPortugues\SchemaOrg\Properties\IncentivesProperty;
use NilPortugues\SchemaOrg\Properties\IndustryProperty;
use NilPortugues\SchemaOrg\Properties\JobBenefitsProperty;
use NilPortugues\SchemaOrg\Properties\JobLocationProperty;
use NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty;
use NilPortugues\SchemaOrg\Properties\NameProperty;
use NilPortugues\SchemaOrg\Properties\OccupationalCategoryProperty;
use NilPortugues\SchemaOrg\Properties\PotentialActionProperty;
use NilPortugues\SchemaOrg\Properties\QualificationsProperty;
use NilPortugues\SchemaOrg\Properties\ResponsibilitiesProperty;
use NilPortugues\SchemaOrg\Properties\SalaryCurrencyProperty;
use NilPortugues\SchemaOrg\Properties\SameAsProperty;
use NilPortugues\SchemaOrg\Properties\SkillsProperty;
use NilPortugues\SchemaOrg\Properties\SpecialCommitmentsProperty;
use NilPortugues\SchemaOrg\Properties\TitleProperty;
use NilPortugues\SchemaOrg\Properties\UrlProperty;
use NilPortugues\SchemaOrg\Properties\WorkHoursProperty;
use NilPortugues\SchemaOrg\SchemaClass;

/**
 * Classes JobPosting.
 */
class JobPosting extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/JobPosting';

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
    public static function baseSalary()
    {
        return BaseSalaryProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function benefits()
    {
        return BenefitsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function datePosted()
    {
        return DatePostedProperty::create(self::schemaUrl());
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
    public static function educationRequirements()
    {
        return EducationRequirementsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function employmentType()
    {
        return EmploymentTypeProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function experienceRequirements()
    {
        return ExperienceRequirementsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function hiringOrganization()
    {
        return HiringOrganizationProperty::create(self::schemaUrl());
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
    public static function incentiveCompensation()
    {
        return IncentiveCompensationProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function incentives()
    {
        return IncentivesProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function industry()
    {
        return IndustryProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function jobBenefits()
    {
        return JobBenefitsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function jobLocation()
    {
        return JobLocationProperty::create(self::schemaUrl());
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
    public static function name()
    {
        return NameProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function occupationalCategory()
    {
        return OccupationalCategoryProperty::create(self::schemaUrl());
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
    public static function qualifications()
    {
        return QualificationsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function responsibilities()
    {
        return ResponsibilitiesProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function salaryCurrency()
    {
        return SalaryCurrencyProperty::create(self::schemaUrl());
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
    public static function skills()
    {
        return SkillsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function specialCommitments()
    {
        return SpecialCommitmentsProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function title()
    {
        return TitleProperty::create(self::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function url()
    {
        return UrlProperty::create(Thing::schemaUrl());
    }

    /**
     * @return Mapping
     */
    public static function workHours()
    {
        return WorkHoursProperty::create(self::schemaUrl());
    }
}
