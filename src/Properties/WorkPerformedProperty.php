<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A work performed in some event, for example a play performed in a TheaterEvent.
 */
class WorkPerformedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/workPerformed';
    const PROPERTY_NAME = 'workPerformed';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
