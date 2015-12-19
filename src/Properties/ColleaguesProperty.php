<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A colleague of the person.
 */
class ColleaguesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/colleagues';
    const PROPERTY_NAME = 'colleagues';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
