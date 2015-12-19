<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Nutrition information about the recipe.
 */
class NutritionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/nutrition';
    const PROPERTY_NAME = 'nutrition';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Recipe',
    ];
}
