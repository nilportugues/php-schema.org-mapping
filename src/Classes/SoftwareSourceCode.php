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
 * @method static \NilPortugues\SchemaOrg\Properties\CodeRepositoryProperty codeRepository()
 * @method static \NilPortugues\SchemaOrg\Properties\ProgrammingLanguageProperty programmingLanguage()
 * @method static \NilPortugues\SchemaOrg\Properties\RuntimeProperty runtime()
 * @method static \NilPortugues\SchemaOrg\Properties\RuntimePlatformProperty runtimePlatform()
 * @method static \NilPortugues\SchemaOrg\Properties\SampleTypeProperty sampleType()
 * @method static \NilPortugues\SchemaOrg\Properties\CodeSampleTypeProperty codeSampleType()
 * @method static \NilPortugues\SchemaOrg\Properties\TargetProductProperty targetProduct()
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
 * Computer programming source code. Example: Full (compile ready) solutions, code snippet samples, scripts, templates.
 */
class SoftwareSourceCode extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/SoftwareSourceCode';

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
        'codeRepository' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeRepositoryProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareSourceCode',
        ],
        'codeSampleType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CodeSampleTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareSourceCode',
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
        'potentialAction' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PotentialActionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'programmingLanguage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ProgrammingLanguageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareSourceCode',
        ],
        'runtime' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RuntimeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareSourceCode',
        ],
        'runtimePlatform' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\RuntimePlatformProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareSourceCode',
        ],
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'sampleType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SampleTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareSourceCode',
        ],
        'targetProduct' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\TargetProductProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\SoftwareSourceCode',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
    ];
}
