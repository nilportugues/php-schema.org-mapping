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
 * @method static \NilPortugues\SchemaOrg\Properties\BaseSalaryProperty baseSalary()
 * @method static \NilPortugues\SchemaOrg\Properties\BenefitsProperty benefits()
 * @method static \NilPortugues\SchemaOrg\Properties\JobBenefitsProperty jobBenefits()
 * @method static \NilPortugues\SchemaOrg\Properties\DatePostedProperty datePosted()
 * @method static \NilPortugues\SchemaOrg\Properties\EducationRequirementsProperty educationRequirements()
 * @method static \NilPortugues\SchemaOrg\Properties\EmploymentTypeProperty employmentType()
 * @method static \NilPortugues\SchemaOrg\Properties\ExperienceRequirementsProperty experienceRequirements()
 * @method static \NilPortugues\SchemaOrg\Properties\HiringOrganizationProperty hiringOrganization()
 * @method static \NilPortugues\SchemaOrg\Properties\IncentivesProperty incentives()
 * @method static \NilPortugues\SchemaOrg\Properties\IncentiveCompensationProperty incentiveCompensation()
 * @method static \NilPortugues\SchemaOrg\Properties\IndustryProperty industry()
 * @method static \NilPortugues\SchemaOrg\Properties\JobLocationProperty jobLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\OccupationalCategoryProperty occupationalCategory()
 * @method static \NilPortugues\SchemaOrg\Properties\QualificationsProperty qualifications()
 * @method static \NilPortugues\SchemaOrg\Properties\ResponsibilitiesProperty responsibilities()
 * @method static \NilPortugues\SchemaOrg\Properties\SalaryCurrencyProperty salaryCurrency()
 * @method static \NilPortugues\SchemaOrg\Properties\SkillsProperty skills()
 * @method static \NilPortugues\SchemaOrg\Properties\SpecialCommitmentsProperty specialCommitments()
 * @method static \NilPortugues\SchemaOrg\Properties\TitleProperty title()
 * @method static \NilPortugues\SchemaOrg\Properties\WorkHoursProperty workHours()
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
 * A listing that describes a job opening in a certain organization.
 */
class JobPosting extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/JobPosting';

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
        'baseSalary' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BaseSalaryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'benefits' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\BenefitsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'datePosted' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DatePostedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'educationRequirements' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EducationRequirementsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'employmentType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EmploymentTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'experienceRequirements' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExperienceRequirementsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'hiringOrganization' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HiringOrganizationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'incentiveCompensation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IncentiveCompensationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'incentives' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IncentivesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'industry' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IndustryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'jobBenefits' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\JobBenefitsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'jobLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\JobLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'occupationalCategory' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OccupationalCategoryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'qualifications' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\QualificationsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'responsibilities' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ResponsibilitiesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'salaryCurrency' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SalaryCurrencyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'skills' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SkillsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'specialCommitments' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SpecialCommitmentsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'title' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TitleProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'workHours' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\WorkHoursProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\JobPosting',
        ],
    ];
}
