<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An Event that is part of this event. For example, a conference event includes many presentations, each of which is a subEvent of the conference.
 */
class SubEventProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/subEvent';
    const PROPERTY_NAME = 'subEvent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
