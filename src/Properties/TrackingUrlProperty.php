<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Tracking url for the parcel delivery.
 */
class TrackingUrlProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/trackingUrl';
    const PROPERTY_NAME = 'trackingUrl';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ParcelDelivery',
    ];
}
