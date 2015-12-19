<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The latest someone may check out of a lodging establishment.
 */
class CheckoutTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/checkoutTime';
    const PROPERTY_NAME = 'checkoutTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LodgingReservation',
    ];
}
