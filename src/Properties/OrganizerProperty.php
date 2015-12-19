<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An organizer of an Event.
 */
class OrganizerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/organizer';
    const PROPERTY_NAME = 'organizer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
