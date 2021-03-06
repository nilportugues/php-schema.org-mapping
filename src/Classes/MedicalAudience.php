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
 * @method static \NilPortugues\SchemaOrg\Properties\AudienceTypeProperty audienceType()
 * @method static \NilPortugues\SchemaOrg\Properties\GeographicAreaProperty geographicArea()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
 * @method static \NilPortugues\SchemaOrg\Properties\SupersededByProperty supersededBy()
 * @method static \NilPortugues\SchemaOrg\Properties\HealthConditionProperty healthCondition()
 * @method static \NilPortugues\SchemaOrg\Properties\RequiredGenderProperty requiredGender()
 * @method static \NilPortugues\SchemaOrg\Properties\RequiredMaxAgeProperty requiredMaxAge()
 * @method static \NilPortugues\SchemaOrg\Properties\RequiredMinAgeProperty requiredMinAge()
 * @method static \NilPortugues\SchemaOrg\Properties\SuggestedGenderProperty suggestedGender()
 * @method static \NilPortugues\SchemaOrg\Properties\SuggestedMaxAgeProperty suggestedMaxAge()
 * @method static \NilPortugues\SchemaOrg\Properties\SuggestedMinAgeProperty suggestedMinAge()
 * METHODEND.
 *
 * Target audiences for medical web pages. Enumerated type.
 */
class MedicalAudience extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/MedicalAudience';

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
        'audienceType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AudienceTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Audience',
        ],
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'geographicArea' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GeographicAreaProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Audience',
        ],
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'healthCondition' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HealthConditionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'medicineSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MedicineSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'requiredGender' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RequiredGenderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'requiredMaxAge' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RequiredMaxAgeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'requiredMinAge' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RequiredMinAgeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'suggestedGender' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SuggestedGenderProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'suggestedMaxAge' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SuggestedMaxAgeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'suggestedMinAge' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SuggestedMinAgeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PeopleAudience',
        ],
        'supersededBy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SupersededByProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Enumeration',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
