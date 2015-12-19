<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The time interval used to compute the invoice.
 */
class BillingPeriodProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/billingPeriod';
    const PROPERTY_NAME = 'billingPeriod';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Invoice',
    ];
}
