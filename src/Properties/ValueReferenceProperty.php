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
 * A pointer to a secondary value that provides additional information on the original value, e.g. a reference temperature.
 */
class ValueReferenceProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/valueReference';
    const PROPERTY_NAME = 'valueReference';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/QualitativeValue',
        'http://schema.org/QuantitativeValue',
        'http://schema.org/PropertyValue',
    ];
}
