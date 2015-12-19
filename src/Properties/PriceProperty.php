<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The offer price of a product, or of a price component when attached to PriceSpecification and its subtypes.
 */
class PriceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/price';
    const PROPERTY_NAME = 'price';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/PriceSpecification',
        'http://schema.org/TradeAction',
    ];
}
