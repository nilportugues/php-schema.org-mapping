<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The start date and time of the item (in ISO 8601 date format).
 */
class StartDateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/startDate';
    const PROPERTY_NAME = 'startDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Role',
        'http://schema.org/Event',
        'http://schema.org/CreativeWorkSeason',
        'http://schema.org/CreativeWorkSeries',
    ];
}
