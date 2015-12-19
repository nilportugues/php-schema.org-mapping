<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The payment method(s) accepted by seller for this offer.
 */
class AcceptedPaymentMethodProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/acceptedPaymentMethod';
    const PROPERTY_NAME = 'acceptedPaymentMethod';

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
