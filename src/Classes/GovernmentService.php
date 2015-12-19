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
 * @method static \NilPortugues\SchemaOrg\Properties\ServiceOperatorProperty serviceOperator()
 * METHODEND.
 *
 * A service provided by a government organization, e.g. food stamps, veterans benefits, etc.
 */
class GovernmentService extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/GovernmentService';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'serviceOperator' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\ServiceOperatorProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\GovernmentService',
        ],
    ];
}
