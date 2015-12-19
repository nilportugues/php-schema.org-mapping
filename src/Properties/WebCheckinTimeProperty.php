<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The time when a passenger can check into the flight online.
 */
class WebCheckinTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/webCheckinTime';
    const PROPERTY_NAME = 'webCheckinTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Flight',
    ];
}
