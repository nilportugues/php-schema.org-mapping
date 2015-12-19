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
 * The distance traveled per unit of fuel used; most commonly miles per gallon (mpg) or kilometers per liter (km/L).
 */
class FuelEfficiencyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/fuelEfficiency';
    const PROPERTY_NAME = 'fuelEfficiency';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
