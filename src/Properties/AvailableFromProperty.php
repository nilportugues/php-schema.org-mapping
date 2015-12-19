<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * When the item is available for pickup from the store, locker, etc.
 */
class AvailableFromProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availableFrom';
    const PROPERTY_NAME = 'availableFrom';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DeliveryEvent',
    ];
}
