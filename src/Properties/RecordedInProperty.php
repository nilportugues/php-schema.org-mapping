<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The CreativeWork that captured all or part of this Event.
 */
class RecordedInProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/recordedIn';
    const PROPERTY_NAME = 'recordedIn';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Event',
    ];
}
