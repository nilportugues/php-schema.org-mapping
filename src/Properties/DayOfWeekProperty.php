<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The day of the week for which these opening hours are valid.
 */
class DayOfWeekProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dayOfWeek';
    const PROPERTY_NAME = 'dayOfWeek';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/OpeningHoursSpecification',
    ];
}
