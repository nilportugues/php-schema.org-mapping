<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The latest date the package may arrive.
 */
class ExpectedArrivalUntilProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/expectedArrivalUntil';
    const PROPERTY_NAME = 'expectedArrivalUntil';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ParcelDelivery',
    ];
}
