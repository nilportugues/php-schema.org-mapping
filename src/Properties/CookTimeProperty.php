<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The time it takes to actually cook the dish, in ISO 8601 duration format.
 */
class CookTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/cookTime';
    const PROPERTY_NAME = 'cookTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Recipe',
    ];
}
