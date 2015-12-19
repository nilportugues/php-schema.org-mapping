<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The currency (in 3-letter ISO 4217 format) of the discount.
 */
class DiscountCurrencyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/discountCurrency';
    const PROPERTY_NAME = 'discountCurrency';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
    ];
}
