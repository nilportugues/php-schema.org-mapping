<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of grams of sugar.
 */
class SugarContentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sugarContent';
    const PROPERTY_NAME = 'sugarContent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NutritionInformation',
    ];
}
