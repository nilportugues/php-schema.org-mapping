<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of grams of fat.
 */
class FatContentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/fatContent';
    const PROPERTY_NAME = 'fatContent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NutritionInformation',
    ];
}
