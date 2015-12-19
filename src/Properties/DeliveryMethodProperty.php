<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of instrument. The method of delivery.
 */
class DeliveryMethodProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/deliveryMethod';
    const PROPERTY_NAME = 'deliveryMethod';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/OrderAction',
        'http://schema.org/ReceiveAction',
        'http://schema.org/SendAction',
        'http://schema.org/TrackAction',
    ];
}
