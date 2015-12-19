<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The earliest date the package may arrive.
 */
class ExpectedArrivalFromProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/expectedArrivalFrom';
    const PROPERTY_NAME = 'expectedArrivalFrom';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ParcelDelivery',
    ];
}
