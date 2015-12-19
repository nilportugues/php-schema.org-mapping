<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The opening hours of a certain place.
 */
class OpeningHoursSpecificationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/openingHoursSpecification';
    const PROPERTY_NAME = 'openingHoursSpecification';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Place',
    ];
}
