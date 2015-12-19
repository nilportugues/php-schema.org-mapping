<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * New entry added as the package passes through each leg of its journey (from shipment to final delivery).
 */
class DeliveryStatusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/deliveryStatus';
    const PROPERTY_NAME = 'deliveryStatus';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ParcelDelivery',
    ];
}
