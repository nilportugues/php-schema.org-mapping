<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The cuisine of the recipe (for example, French or Ethiopian).
 */
class RecipeCuisineProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/recipeCuisine';
    const PROPERTY_NAME = 'recipeCuisine';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Recipe',
    ];
}
