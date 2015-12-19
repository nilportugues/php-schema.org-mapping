<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The time validity of the permit.
 */
class ValidForProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/validFor';
    const PROPERTY_NAME = 'validFor';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Permit',
    ];
}
