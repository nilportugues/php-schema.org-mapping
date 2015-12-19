<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of grams of unsaturated fat.
 */
class UnsaturatedFatContentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/unsaturatedFatContent';
    const PROPERTY_NAME = 'unsaturatedFatContent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NutritionInformation',
    ];
}
