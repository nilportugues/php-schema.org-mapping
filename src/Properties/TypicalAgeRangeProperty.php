<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The typical expected age range, e.g. '7-9', '11-'.
 */
class TypicalAgeRangeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/typicalAgeRange';
    const PROPERTY_NAME = 'typicalAgeRange';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/Event',
    ];
}
