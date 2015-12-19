<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The weight of the product or person.
 */
class WeightProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/weight';
    const PROPERTY_NAME = 'weight';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Product',
        'http://schema.org/Person',
    ];
}
