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
 * Indicates whether a FoodEstablishment accepts reservations. Values can be Boolean, a URL at which reservations can be made or (for backwards compatibility) the strings Yes or No.
 */
class AcceptsReservationsProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/acceptsReservations';
    const PROPERTY_NAME = 'acceptsReservations';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/FoodEstablishment',
    ];
}
