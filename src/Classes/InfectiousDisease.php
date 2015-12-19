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
 * @method static \NilPortugues\SchemaOrg\Properties\InfectiousAgentProperty infectiousAgent()
 * @method static \NilPortugues\SchemaOrg\Properties\InfectiousAgentClassProperty infectiousAgentClass()
 * @method static \NilPortugues\SchemaOrg\Properties\TransmissionMethodProperty transmissionMethod()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeProperty code()
 * @method static \NilPortugues\SchemaOrg\Properties\GuidelineProperty guideline()
 * @method static \NilPortugues\SchemaOrg\Properties\MedicineSystemProperty medicineSystem()
 * @method static \NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty recognizingAuthority()
 * @method static \NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty relevantSpecialty()
 * @method static \NilPortugues\SchemaOrg\Properties\StudyProperty study()
 * METHODEND.
 *
 * An infectious disease is a clinically evident human disease resulting from the presence of pathogenic microbial agents, like pathogenic viruses, pathogenic bacteria, fungi, protozoa, multicellular parasites, and prions. To be considered an infectious disease, such pathogens are known to be able to cause this disease.
 */
class InfectiousDisease extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/InfectiousDisease';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'code' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'guideline' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\GuidelineProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'infectiousAgent' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InfectiousAgentProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\InfectiousDisease',
        ],
        'infectiousAgentClass' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\InfectiousAgentClassProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\InfectiousDisease',
        ],
        'medicineSystem' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MedicineSystemProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'recognizingAuthority' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RecognizingAuthorityProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'relevantSpecialty' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RelevantSpecialtyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'study' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\StudyProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalEntity',
        ],
        'transmissionMethod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TransmissionMethodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\InfectiousDisease',
        ],
    ];
}
