<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date when the item becomes valid.
 */
class ValidFromProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/validFrom';
    const PROPERTY_NAME = 'validFrom';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Offer',
        'http://schema.org/PriceSpecification',
        'http://schema.org/Demand',
        'http://schema.org/OpeningHoursSpecification',
        'http://schema.org/Permit',
    ];
}
