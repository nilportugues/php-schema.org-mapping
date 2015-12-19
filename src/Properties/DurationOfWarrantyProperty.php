<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The duration of the warranty promise. Common unitCode values are ANN for year, MON for months, or DAY for days.
 */
class DurationOfWarrantyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/durationOfWarranty';
    const PROPERTY_NAME = 'durationOfWarranty';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WarrantyPromise',
    ];
}
