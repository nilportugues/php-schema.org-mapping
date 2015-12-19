<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of offers for the product.
 */
class OfferCountProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/offerCount';
    const PROPERTY_NAME = 'offerCount';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AggregateOffer',
    ];
}
