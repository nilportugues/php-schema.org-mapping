<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The serving size, in terms of the number of volume or mass.
 */
class ServingSizeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/servingSize';
    const PROPERTY_NAME = 'servingSize';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NutritionInformation',
    ];
}
