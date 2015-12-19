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
 * @method static \NilPortugues\SchemaOrg\Properties\CharacterNameProperty characterName()
 * METHODEND.
 *
 * A PerformanceRole is a Role that some entity places with regard to a theatrical performance, e.g. in a Movie, TVSeries etc.
 */
class PerformanceRole extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/PerformanceRole';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'characterName' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\CharacterNameProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\PerformanceRole',
        ],
    ];
}
