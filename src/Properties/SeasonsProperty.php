<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A season in a media series.
 */
class SeasonsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/seasons';
    const PROPERTY_NAME = 'seasons';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/VideoGameSeries',
        'http://schema.org/TVSeries',
        'http://schema.org/RadioSeries',
    ];
}
