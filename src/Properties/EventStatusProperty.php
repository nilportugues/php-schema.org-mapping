<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An eventStatus of an event represents its status; particularly useful when an event is cancelled or rescheduled.
 */
class EventStatusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/eventStatus';
    const PROPERTY_NAME = 'eventStatus';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
