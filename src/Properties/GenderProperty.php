<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Gender of the person.
 */
class GenderProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/gender';
    const PROPERTY_NAME = 'gender';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
