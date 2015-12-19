<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of instrument. The recipe/instructions used to perform the action.
 */
class RecipeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/recipe';
    const PROPERTY_NAME = 'recipe';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CookAction',
    ];
}
