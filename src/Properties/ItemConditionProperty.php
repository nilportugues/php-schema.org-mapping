<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A predefined value from OfferItemCondition or a textual description of the condition of the product or service, or the products or services included in the offer.
 */
class ItemConditionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/itemCondition';
    const PROPERTY_NAME = 'itemCondition';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Product',
        'http://schema.org/Demand',
    ];
}
