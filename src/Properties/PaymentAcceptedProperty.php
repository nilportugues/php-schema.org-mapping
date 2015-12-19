<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Cash, credit card, etc.
 */
class PaymentAcceptedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/paymentAccepted';
    const PROPERTY_NAME = 'paymentAccepted';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LocalBusiness',
    ];
}
