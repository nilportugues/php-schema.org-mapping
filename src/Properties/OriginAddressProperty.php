<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Shipper's address.
 */
class OriginAddressProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/originAddress';
    const PROPERTY_NAME = 'originAddress';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ParcelDelivery',
    ];
}
