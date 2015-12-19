<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * One or more detailed price specifications, indicating the unit price and delivery or payment charges.
 */
class PriceSpecificationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/priceSpecification';
    const PROPERTY_NAME = 'priceSpecification';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Demand',
        'http://schema.org/TradeAction',
    ];
}
