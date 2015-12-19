<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The lowest price of all offers available.
 */
class LowPriceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/lowPrice';
    const PROPERTY_NAME = 'lowPrice';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AggregateOffer',
    ];
}
