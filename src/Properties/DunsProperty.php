<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The Dun & Bradstreet DUNS number for identifying an organization or business person.
 */
class DunsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/duns';
    const PROPERTY_NAME = 'duns';

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
