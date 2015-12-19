<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The highest price if the price is a range.
 */
class MaxPriceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/maxPrice';
    const PROPERTY_NAME = 'maxPrice';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PriceSpecification',
    ];
}
