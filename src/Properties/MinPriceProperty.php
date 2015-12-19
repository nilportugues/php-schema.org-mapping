<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The lowest price if the price is a range.
 */
class MinPriceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/minPrice';
    const PROPERTY_NAME = 'minPrice';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PriceSpecification',
    ];
}
