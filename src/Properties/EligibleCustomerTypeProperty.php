<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The type(s) of customers for which the given offer is valid.
 */
class EligibleCustomerTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/eligibleCustomerType';
    const PROPERTY_NAME = 'eligibleCustomerType';

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
