<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of grams of protein.
 */
class ProteinContentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/proteinContent';
    const PROPERTY_NAME = 'proteinContent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NutritionInformation',
    ];
}
