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
 * Specifies whether the applicable value-added tax (VAT) is included in the price specification or not.
 */
class ValueAddedTaxIncludedProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/valueAddedTaxIncluded';
    const PROPERTY_NAME = 'valueAddedTaxIncluded';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PriceSpecification',
    ];
}
