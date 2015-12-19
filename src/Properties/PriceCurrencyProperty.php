<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The currency (in 3-letter ISO 4217 format) of the price or a price component, when attached to PriceSpecification and its subtypes.
 */
class PriceCurrencyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/priceCurrency';
    const PROPERTY_NAME = 'priceCurrency';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Reservation',
        'http://schema.org/Ticket',
        'http://schema.org/Offer',
        'http://schema.org/PriceSpecification',
    ];
}
