<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of grams of carbohydrates.
 */
class CarbohydrateContentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/carbohydrateContent';
    const PROPERTY_NAME = 'carbohydrateContent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NutritionInformation',
    ];
}
