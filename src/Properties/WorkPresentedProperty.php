<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The movie presented during this event.
 */
class WorkPresentedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/workPresented';
    const PROPERTY_NAME = 'workPresented';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ScreeningEvent',
    ];
}
