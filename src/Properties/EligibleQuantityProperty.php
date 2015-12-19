<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The interval and unit of measurement of ordering quantities for which the offer or price specification is valid. This allows e.g. specifying that a certain freight charge is valid only for a certain quantity.
 */
class EligibleQuantityProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/eligibleQuantity';
    const PROPERTY_NAME = 'eligibleQuantity';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/PriceSpecification',
        'http://schema.org/Demand',
    ];
}
