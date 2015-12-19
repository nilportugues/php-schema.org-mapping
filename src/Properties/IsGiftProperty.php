<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Was the offer accepted as a gift for someone other than the buyer.
 */
class IsGiftProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/isGift';
    const PROPERTY_NAME = 'isGift';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
    ];
}
