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

use NilPortugues\SchemaOrg\Property;

/**
 * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
 */
class RangeIncludesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/rangeIncludes';
    const PROPERTY_NAME = 'rangeIncludes';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Property',
    ];
}
