<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Event that this person is a performer or participant in.
 */
class PerformerInProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/performerIn';
    const PROPERTY_NAME = 'performerIn';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
