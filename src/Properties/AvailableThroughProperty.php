<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * After this date, the item will no longer be available for pickup.
 */
class AvailableThroughProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availableThrough';
    const PROPERTY_NAME = 'availableThrough';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DeliveryEvent',
    ];
}
