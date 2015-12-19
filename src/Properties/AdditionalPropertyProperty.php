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
 * A property-value pair representing an additional characteristics of the entitity, e.g. a product feature or another characteristic for which there is no matching property in schema.org. 
 */
class AdditionalPropertyProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/additionalProperty';
    const PROPERTY_NAME = 'additionalProperty';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Product',
        'http://schema.org/Place',
        'http://schema.org/QualitativeValue',
        'http://schema.org/QuantitativeValue',
    ];
}
