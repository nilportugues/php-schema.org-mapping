<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Code used to redeem a discount.
 */
class DiscountCodeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/discountCode';
    const PROPERTY_NAME = 'discountCode';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
    ];
}
