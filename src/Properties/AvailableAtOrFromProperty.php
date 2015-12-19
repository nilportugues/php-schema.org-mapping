<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The place(s) from which the offer can be obtained (e.g. store locations).
 */
class AvailableAtOrFromProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availableAtOrFrom';
    const PROPERTY_NAME = 'availableAtOrFrom';

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
