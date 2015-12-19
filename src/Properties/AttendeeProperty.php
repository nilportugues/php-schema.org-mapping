<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A person or organization attending the event.
 */
class AttendeeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/attendee';
    const PROPERTY_NAME = 'attendee';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
