<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The North American Industry Classification System (NAICS) code for a particular organization or business person.
 */
class NaicsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/naics';
    const PROPERTY_NAME = 'naics';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Person',
    ];
}
