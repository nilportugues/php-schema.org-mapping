<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The price range of the business, for example $$$.
 */
class PriceRangeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/priceRange';
    const PROPERTY_NAME = 'priceRange';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LocalBusiness',
    ];
}
