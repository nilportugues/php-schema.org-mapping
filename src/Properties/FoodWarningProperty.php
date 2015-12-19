<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Any precaution, guidance, contraindication, etc. related to consumption of specific foods while taking this drug.
 */
class FoodWarningProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/foodWarning';
    const PROPERTY_NAME = 'foodWarning';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
