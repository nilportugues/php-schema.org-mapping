<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The size of the business in annual revenue.
 */
class YearlyRevenueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/yearlyRevenue';
    const PROPERTY_NAME = 'yearlyRevenue';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/BusinessAudience',
    ];
}
