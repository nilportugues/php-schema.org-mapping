<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The highest price of all offers available.
 */
class HighPriceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/highPrice';
    const PROPERTY_NAME = 'highPrice';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AggregateOffer',
    ];
}
