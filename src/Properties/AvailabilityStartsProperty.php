<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The beginning of the availability of the product or service included in the offer.
 */
class AvailabilityStartsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availabilityStarts';
    const PROPERTY_NAME = 'availabilityStarts';

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
