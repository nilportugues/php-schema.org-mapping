<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The availability of this item&#x2014;for example In stock, Out of stock, Pre-order, etc.
 */
class AvailabilityProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availability';
    const PROPERTY_NAME = 'availability';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Demand',
    ];
}
