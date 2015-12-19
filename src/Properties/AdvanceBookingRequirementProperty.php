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
 * The amount of time that is required between accepting the offer and the actual usage of the resource or service.
 */
class AdvanceBookingRequirementProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/advanceBookingRequirement';
    const PROPERTY_NAME = 'advanceBookingRequirement';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Demand',
    ];
}
