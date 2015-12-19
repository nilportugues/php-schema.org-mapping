<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Destination address.
 */
class DeliveryAddressProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/deliveryAddress';
    const PROPERTY_NAME = 'deliveryAddress';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ParcelDelivery',
    ];
}
