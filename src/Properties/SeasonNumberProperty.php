<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Position of the season within an ordered group of seasons.
 */
class SeasonNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/seasonNumber';
    const PROPERTY_NAME = 'seasonNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWorkSeason',
    ];
}
