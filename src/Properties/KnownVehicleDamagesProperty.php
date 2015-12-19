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
 * A textual description of known damages, both repaired and unrepaired.
 */
class KnownVehicleDamagesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/knownVehicleDamages';
    const PROPERTY_NAME = 'knownVehicleDamages';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
