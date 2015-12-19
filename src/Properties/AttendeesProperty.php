<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A person attending the event.
 */
class AttendeesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/attendees';
    const PROPERTY_NAME = 'attendees';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
