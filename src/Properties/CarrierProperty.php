<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * 'carrier' is an out-dated term indicating the 'provider' for parcel delivery and flights.
 */
class CarrierProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/carrier';
    const PROPERTY_NAME = 'carrier';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ParcelDelivery',
        'http://schema.org/Flight',
    ];
}
