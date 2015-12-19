<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The length of time it takes to prepare the recipe, in ISO 8601 duration format.
 */
class PrepTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/prepTime';
    const PROPERTY_NAME = 'prepTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Recipe',
    ];
}
