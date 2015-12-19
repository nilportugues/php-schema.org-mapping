<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The total distance travelled by the particular vehicle since its initial production, as read from its odometer.
 */
class MileageFromOdometerProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/mileageFromOdometer';
    const PROPERTY_NAME = 'mileageFromOdometer';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Vehicle',
    ];
}
