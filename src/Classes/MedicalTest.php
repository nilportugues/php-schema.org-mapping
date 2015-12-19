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
 * @method static \NilPortugues\SchemaOrg\Properties\AffectedByProperty affectedBy()
 * @method static \NilPortugues\SchemaOrg\Properties\NormalRangeProperty normalRange()
 * @method static \NilPortugues\SchemaOrg\Properties\SignDetectedProperty signDetected()
 * @method static \NilPortugues\SchemaOrg\Properties\UsedToDiagnoseProperty usedToDiagnose()
 * @method static \NilPortugues\SchemaOrg\Properties\UsesDeviceProperty usesDevice()
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
 * Any medical test, typically performed for diagnostic purposes.
 */
class MedicalTest extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/MedicalTest';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'affectedBy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AffectedByProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTest',
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
        'normalRange' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NormalRangeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTest',
        ],
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'signDetected' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SignDetectedProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTest',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'usedToDiagnose' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UsedToDiagnoseProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTest',
        ],
        'usesDevice' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UsesDeviceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\MedicalTest',
        ],
    ];
}
