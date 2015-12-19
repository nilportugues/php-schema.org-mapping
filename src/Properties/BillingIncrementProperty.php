<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * This property specifies the minimal quantity and rounding increment that will be the basis for the billing. The unit of measurement is specified by the unitCode property.
 */
class BillingIncrementProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/billingIncrement';
    const PROPERTY_NAME = 'billingIncrement';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/UnitPriceSpecification',
    ];
}
