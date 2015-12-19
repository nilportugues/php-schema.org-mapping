<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The opening hour of the place or service on the given day(s) of the week.
 */
class OpensProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/opens';
    const PROPERTY_NAME = 'opens';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/OpeningHoursSpecification',
    ];
}
