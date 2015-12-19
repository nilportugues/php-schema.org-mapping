<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of milligrams of sodium.
 */
class SodiumContentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sodiumContent';
    const PROPERTY_NAME = 'sodiumContent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NutritionInformation',
    ];
}
