<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The country of the principal offices of the production company or individual responsible for the movie or program.
 */
class CountryOfOriginProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/countryOfOrigin';
    const PROPERTY_NAME = 'countryOfOrigin';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Movie',
        'http://schema.org/TVEpisode',
        'http://schema.org/TVSeason',
        'http://schema.org/TVSeries',
    ];
}
