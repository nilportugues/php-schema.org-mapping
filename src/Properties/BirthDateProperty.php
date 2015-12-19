<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Date of birth.
 */
class BirthDateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/birthDate';
    const PROPERTY_NAME = 'birthDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
