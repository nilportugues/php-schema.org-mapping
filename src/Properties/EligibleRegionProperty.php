<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The ISO 3166-1 (ISO 3166-1 alpha-2) or ISO 3166-2 code, the place, or the GeoShape for the geo-political region(s) for which the offer or delivery charge specification is valid.
 */
class EligibleRegionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/eligibleRegion';
    const PROPERTY_NAME = 'eligibleRegion';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/DeliveryChargeSpecification',
        'http://schema.org/Demand',
    ];
}
