<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of grams of saturated fat.
 */
class SaturatedFatContentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/saturatedFatContent';
    const PROPERTY_NAME = 'saturatedFatContent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NutritionInformation',
    ];
}
