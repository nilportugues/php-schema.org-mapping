<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of grams of trans fat.
 */
class TransFatContentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/transFatContent';
    const PROPERTY_NAME = 'transFatContent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NutritionInformation',
    ];
}
