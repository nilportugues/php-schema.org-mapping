<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Description of the meals that will be provided or available for purchase.
 */
class MealServiceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/mealService';
    const PROPERTY_NAME = 'mealService';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Flight',
    ];
}
