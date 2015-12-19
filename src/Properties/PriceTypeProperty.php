<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A short text or acronym indicating multiple price specifications for the same offer, e.g. SRP for the suggested retail price or INVOICE for the invoice price, mostly used in the car industry.
 */
class PriceTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/priceType';
    const PROPERTY_NAME = 'priceType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/UnitPriceSpecification',
    ];
}
