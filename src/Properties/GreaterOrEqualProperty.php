<?php
/**
 * Author: Nil Portugués Calderó <contact@nilportugues.com>
 * Date: 12/18/15
 * Time: 11:36 PM.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\SchemaProperty;

/**
 * This ordering relation for qualitative values indicates that the subject is greater than or equal to the object.
 */
class GreaterOrEqualProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/greaterOrEqual';
    const PROPERTY_NAME = 'greaterOrEqual';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/QualitativeValue',
    ];
}
