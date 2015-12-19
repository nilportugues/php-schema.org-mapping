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
 * @method static \NilPortugues\SchemaOrg\Properties\ActionPlatformProperty actionPlatform()
 * @method static \NilPortugues\SchemaOrg\Properties\HttpMethodProperty httpMethod()
 * @method static \NilPortugues\SchemaOrg\Properties\EncodingTypeProperty encodingType()
 * @method static \NilPortugues\SchemaOrg\Properties\ContentTypeProperty contentType()
 * @method static \NilPortugues\SchemaOrg\Properties\ApplicationProperty application()
 * @method static \NilPortugues\SchemaOrg\Properties\ActionApplicationProperty actionApplication()
 * @method static \NilPortugues\SchemaOrg\Properties\UrlTemplateProperty urlTemplate()
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
 * An entry point, within some Web-based protocol.
 */
class EntryPoint extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/EntryPoint';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'actionApplication' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActionApplicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\EntryPoint',
        ],
        'actionPlatform' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ActionPlatformProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\EntryPoint',
        ],
        'additionalType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AdditionalTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'alternateName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\AlternateNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'application' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ApplicationProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\EntryPoint',
        ],
        'contentType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ContentTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\EntryPoint',
        ],
        'description' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\DescriptionProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'encodingType' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EncodingTypeProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\EntryPoint',
        ],
        'httpMethod' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\HttpMethodProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\EntryPoint',
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
        'sameAs' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\SameAsProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'url' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'urlTemplate' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\UrlTemplateProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\EntryPoint',
        ],
    ];
}
