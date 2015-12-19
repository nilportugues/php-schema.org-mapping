<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The name of the bus (e.g. Bolt Express).
 */
class BusNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/busName';
    const PROPERTY_NAME = 'busName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BusTrip',
    ];
}
