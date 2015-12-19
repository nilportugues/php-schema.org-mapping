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
 * @method static \NilPortugues\SchemaOrg\Properties\EducationalRoleProperty educationalRole()
 * METHODEND.
 *
 * An EducationalAudience.
 */
class EducationalAudience extends SchemaClass
{
    /**
     * @var string
     */
    protected static $schemaUrl = 'http://schema.org/EducationalAudience';

    /**
     * @var array
     */
    protected static $supportedMethods = [
        'educationalRole' => [
            'propertyClass' => '\NilPortugues\SchemaOrg\Properties\EducationalRoleProperty',
            'schemaClass' => '\NilPortugues\SchemaOrg\Classes\EducationalAudience',
        ],
    ];
}
