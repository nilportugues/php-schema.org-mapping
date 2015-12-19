<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A single ingredient used in the recipe, e.g. sugar, flour or garlic.
 */
class IngredientsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/ingredients';
    const PROPERTY_NAME = 'ingredients';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Recipe',
    ];
}
