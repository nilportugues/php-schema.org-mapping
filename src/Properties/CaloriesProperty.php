<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of calories.
 */
class CaloriesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/calories';
    const PROPERTY_NAME = 'calories';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NutritionInformation',
    ];
}
