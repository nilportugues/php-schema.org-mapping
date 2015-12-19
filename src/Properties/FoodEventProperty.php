<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of location. The specific food event where the action occurred.
 */
class FoodEventProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/foodEvent';
    const PROPERTY_NAME = 'foodEvent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CookAction',
    ];
}
