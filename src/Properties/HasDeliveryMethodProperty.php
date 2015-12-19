<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Method used for delivery or shipping.
 */
class HasDeliveryMethodProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/hasDeliveryMethod';
    const PROPERTY_NAME = 'hasDeliveryMethod';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DeliveryEvent',
        'http://schema.org/ParcelDelivery',
    ];
}
