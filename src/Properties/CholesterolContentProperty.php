<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of milligrams of cholesterol.
 */
class CholesterolContentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/cholesterolContent';
    const PROPERTY_NAME = 'cholesterolContent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NutritionInformation',
    ];
}
