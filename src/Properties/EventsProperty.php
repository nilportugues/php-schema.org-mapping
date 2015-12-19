<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Upcoming or past events associated with this place or organization.
 */
class EventsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/events';
    const PROPERTY_NAME = 'events';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Place',
    ];
}
