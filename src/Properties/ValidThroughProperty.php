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
 * The end of the validity of offer, price specification, or opening hours data.
 */
class ValidThroughProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/validThrough';
    const PROPERTY_NAME = 'validThrough';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/PriceSpecification',
        'http://schema.org/Demand',
        'http://schema.org/OpeningHoursSpecification',
    ];
}
