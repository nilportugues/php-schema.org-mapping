<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sibling of the person.
 */
class SiblingsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/siblings';
    const PROPERTY_NAME = 'siblings';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
