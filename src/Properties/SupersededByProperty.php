<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Relates a term (i.e. a property, class or enumeration) to one that supersedes it.
 */
class SupersededByProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/supersededBy';
    const PROPERTY_NAME = 'supersededBy';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Property',
        'http://schema.org/Class',
        'http://schema.org/Enumeration',
    ];
}
