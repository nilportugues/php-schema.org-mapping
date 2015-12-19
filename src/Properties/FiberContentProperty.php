<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of grams of fiber.
 */
class FiberContentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/fiberContent';
    const PROPERTY_NAME = 'fiberContent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NutritionInformation',
    ];
}
