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
 * @method static \NilPortugues\SchemaOrg\Properties\DietFeaturesProperty dietFeatures()
 * @method static \NilPortugues\SchemaOrg\Properties\EndorsersProperty endorsers()
 * @method static \NilPortugues\SchemaOrg\Properties\ExpertConsiderationsProperty expertConsiderations()
 * @method static \NilPortugues\SchemaOrg\Properties\OverviewProperty overview()
 * @method static \NilPortugues\SchemaOrg\Properties\PhysiologicalBenefitsProperty physiologicalBenefits()
 * @method static \NilPortugues\SchemaOrg\Properties\ProprietaryNameProperty proprietaryName()
 * @method static \NilPortugues\SchemaOrg\Properties\RisksProperty risks()
 * @method static \NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty additionalType()
 * @method static \NilPortugues\SchemaOrg\Properties\AlternateNameProperty alternateName()
 * @method static \NilPortugues\SchemaOrg\Properties\DescriptionProperty description()
 * @method static \NilPortugues\SchemaOrg\Properties\ImageProperty image()
 * @method static \NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty mainEntityOfPage()
 * @method static \NilPortugues\SchemaOrg\Properties\NameProperty name()
 * @method static \NilPortugues\SchemaOrg\Properties\SameAsProperty sameAs()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlProperty url()
 * @method static \NilPortugues\SchemaOrg\Properties\PotentialActionProperty potentialAction()
 * @method static \NilPortugues\SchemaOrg\Properties\AdverseOutcomeProperty adverseOutcome()
 * @method static \NilPortugues\SchemaOrg\Properties\ContraindicationProperty contraindication()
 * @method static \NilPortugues\SchemaOrg\Properties\DuplicateTherapyProperty duplicateTherapy()
 * @method static \NilPortugues\SchemaOrg\Properties\IndicationProperty indication()
 * @method static \NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcomeProperty seriousAdverseOutcome()
 * METHODEND.
 *
 * A strategy of regulating the intake of food to achieve or maintain a specific health-related goal.
 */
class Diet extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Diet';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'adverseOutcome' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdverseOutcomeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'contraindication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContraindicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'dietFeatures' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DietFeaturesProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Diet',
        ],
        'duplicateTherapy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DuplicateTherapyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'endorsers' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EndorsersProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Diet',
        ],
        'expertConsiderations' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ExpertConsiderationsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Diet',
        ],
        'image' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ImageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'indication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IndicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'overview' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\OverviewProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Diet',
        ],
        'physiologicalBenefits' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PhysiologicalBenefitsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Diet',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'proprietaryName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProprietaryNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Diet',
        ],
        'risks' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RisksProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Diet',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'seriousAdverseOutcome' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SeriousAdverseOutcomeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTherapy',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
