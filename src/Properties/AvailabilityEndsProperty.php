<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The end of the availability of the product or service included in the offer.
 */
class AvailabilityEndsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availabilityEnds';
    const PROPERTY_NAME = 'availabilityEnds';

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
