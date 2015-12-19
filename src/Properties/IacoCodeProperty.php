<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * IACO identifier for an airport.
 */
class IacoCodeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/icaoCode';
    const PROPERTY_NAME = 'iacoCode';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Airport',
    ];
}
