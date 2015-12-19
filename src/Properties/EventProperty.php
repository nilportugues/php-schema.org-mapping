<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Upcoming or past event associated with this place, organization, or action.
 */
class EventProperty extends Property
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
