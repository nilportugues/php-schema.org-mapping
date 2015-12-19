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
 * A string or text indicating the unit of measurement. Useful if you cannot provide a standard unit code for.
 */
class UnitTextProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/unitText';
    const PROPERTY_NAME = 'unitText';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PropertyValue',
        'http://schema.org/QuantitativeValue',
        'http://schema.org/TypeAndQuantityNode',
        'http://schema.org/UnitPriceSpecification',
    ];
}
