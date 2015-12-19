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
 * @method static \NilPortugues\SchemaOrg\Properties\IssuedThroughProperty issuedThrough()
 * @method static \NilPortugues\SchemaOrg\Properties\PermitAudienceProperty permitAudience()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidForProperty validFor()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidFromProperty validFrom()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidInProperty validIn()
 * @method static \NilPortugues\SchemaOrg\Properties\ValidUntilProperty validUntil()
 * @method static \NilPortugues\SchemaOrg\Properties\IssuedByProperty issuedBy()
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
 * A permit issued by an organization, e.g. a parking pass.
 */
class Permit extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/Permit';

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
        'issuedBy' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IssuedByProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Permit',
        ],
        'issuedThrough' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\IssuedThroughProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Permit',
        ],
        'mainEntityOfPage' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\MainEntityOfPageProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'name' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\NameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Thing',
        ],
        'permitAudience' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\PermitAudienceProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Permit',
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
        'validFor' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidForProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Permit',
        ],
        'validFrom' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidFromProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Permit',
        ],
        'validIn' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidInProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Permit',
        ],
        'validUntil' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ValidUntilProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\Permit',
        ],
    ];
}
