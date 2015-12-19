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
 * The type of boarding policy used by the airline (e.g. zone-based or group-based).
 */
class BoardingPolicyProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/boardingPolicy';
    const PROPERTY_NAME = 'boardingPolicy';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Airline',
        'http://schema.org/Flight',
    ];
}
