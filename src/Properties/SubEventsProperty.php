<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Events that are a part of this event. For example, a conference event includes many presentations, each subEvents of the conference.
 */
class SubEventsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/subEvents';
    const PROPERTY_NAME = 'subEvents';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
