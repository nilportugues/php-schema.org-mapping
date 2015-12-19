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
 * A sub property of location. The final location of the object or the agent after the action.
 */
class ToLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/toLocation';
    const PROPERTY_NAME = 'toLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/InsertAction',
        'http://schema.org/MoveAction',
        'http://schema.org/TransferAction',
        'http://schema.org/ExerciseAction',
    ];
}
