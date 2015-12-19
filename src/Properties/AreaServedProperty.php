<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The geographic area where a service or offered item is provided.
 */
class AreaServedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/areaServed';
    const PROPERTY_NAME = 'areaServed';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Service',
        'http://schema.org/Organization',
        'http://schema.org/ContactPoint',
        'http://schema.org/Demand',
        'http://schema.org/Offer',
        'http://schema.org/DeliveryChargeSpecification',
    ];
}
