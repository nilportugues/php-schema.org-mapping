<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The closing hour of the place or service on the given day(s) of the week.
 */
class ClosesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/closes';
    const PROPERTY_NAME = 'closes';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/OpeningHoursSpecification',
    ];
}
