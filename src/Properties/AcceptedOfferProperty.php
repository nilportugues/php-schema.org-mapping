<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The offer(s) -- e.g., product, quantity and price combinations -- included in the order.
 */
class AcceptedOfferProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/acceptedOffer';
    const PROPERTY_NAME = 'acceptedOffer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
    ];
}
