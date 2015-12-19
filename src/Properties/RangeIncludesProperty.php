<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Relates a property to a class that constitutes (one of) the expected type(s) for values of the property.
 */
class RangeIncludesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/rangeIncludes';
    const PROPERTY_NAME = 'rangeIncludes';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Property',
    ];
}
