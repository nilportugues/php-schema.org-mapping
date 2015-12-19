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
 * The unit of measurement given using the UN/CEFACT Common Code (3 characters) or a URL. Other codes than the UN/CEFACT Common Code may be used with a prefix followed by a colon.
 */
class UnitCodeProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/unitCode';
    const PROPERTY_NAME = 'unitCode';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/QuantitativeValue',
        'http://schema.org/TypeAndQuantityNode',
        'http://schema.org/UnitPriceSpecification',
        'http://schema.org/PropertyValue',
    ];
}
