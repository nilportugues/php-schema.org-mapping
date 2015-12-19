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
 * @method static \NilPortugues\SchemaOrg\Properties\OutcomeProperty outcome()
 * @method static \NilPortugues\SchemaOrg\Properties\PopulationProperty population()
 * @method static \NilPortugues\SchemaOrg\Properties\SponsorProperty sponsor()
 * @method static \NilPortugues\SchemaOrg\Properties\StatusProperty status()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyLocationProperty studyLocation()
 * @method static \NilPortugues\SchemaOrg\Properties\StudySubjectProperty studySubject()
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
 * A medical study is an umbrella type covering all kinds of research studies relating to human medicine or health, including observational studies and interventional trials and registries, randomized, controlled or not. When the specific type of study is known, use one of the extensions of this type, such as MedicalTrial or MedicalObservationalStudy. Also, note that this type should be used to mark up data that describes the study itself; to tag an article that publishes the results of a study, use MedicalScholarlyArticle. Note: use the code property of MedicalEntity to store study IDs, e.g. clinicaltrials.gov ID.
 */
class MedicalStudy extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/MedicalStudy';

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
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'outcome' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OutcomeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalStudy',
        ],
        'population' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PopulationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalStudy',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sponsor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SponsorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalStudy',
        ],
        'status' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StatusProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalStudy',
        ],
        'studyLocation' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyLocationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalStudy',
        ],
        'studySubject' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudySubjectProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalStudy',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
