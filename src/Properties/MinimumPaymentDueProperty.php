<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The minimum payment required at this time.
 */
class MinimumPaymentDueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/minimumPaymentDue';
    const PROPERTY_NAME = 'minimumPaymentDue';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Invoice',
    ];
}
