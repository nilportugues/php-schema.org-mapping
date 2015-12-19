<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The telephone number.
 */
class TelephoneProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/telephone';
    const PROPERTY_NAME = 'telephone';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Place',
        'http://schema.org/ContactPoint',
        'http://schema.org/Person',
    ];
}
