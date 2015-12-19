<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date after which the price is no longer available.
 */
class PriceValidUntilProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/priceValidUntil';
    const PROPERTY_NAME = 'priceValidUntil';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
    ];
}
