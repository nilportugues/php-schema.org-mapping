<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The delivery method(s) available for this offer.
 */
class AvailableDeliveryMethodProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availableDeliveryMethod';
    const PROPERTY_NAME = 'availableDeliveryMethod';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/Demand',
    ];
}
