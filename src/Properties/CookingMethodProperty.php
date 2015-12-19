<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The method of cooking, such as Frying, Steaming, ...
 */
class CookingMethodProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/cookingMethod';
    const PROPERTY_NAME = 'cookingMethod';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Recipe',
    ];
}
