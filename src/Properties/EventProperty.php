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
 * Upcoming or past event associated with this place, organization, or action.
 */
class EventProperty extends SchemaProperty
{
    const SCHEMA_URL = 'http://schema.org/event';
    const PROPERTY_NAME = 'event';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Place',
        'http://schema.org/InformAction',
        'http://schema.org/PlayAction',
        'http://schema.org/InviteAction',
        'http://schema.org/JoinAction',
        'http://schema.org/LeaveAction',
    ];
}
