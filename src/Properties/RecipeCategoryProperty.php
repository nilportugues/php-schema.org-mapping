<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The category of the recipe&#x2014;for example, appetizer, entree, etc.
 */
class RecipeCategoryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/recipeCategory';
    const PROPERTY_NAME = 'recipeCategory';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Recipe',
    ];
}
