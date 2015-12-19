<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The person's spouse.
 */
class SpouseProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/spouse';
    const PROPERTY_NAME = 'spouse';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
