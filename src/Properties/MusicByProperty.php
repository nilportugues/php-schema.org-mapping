<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The composer of the soundtrack.
 */
class MusicByProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/musicBy';
    const PROPERTY_NAME = 'musicBy';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Movie',
        'http://schema.org/Episode',
        'http://schema.org/TVSeries',
        'http://schema.org/RadioSeries',
        'http://schema.org/Clip',
        'http://schema.org/MovieSeries',
        'http://schema.org/VideoGame',
        'http://schema.org/VideoGameSeries',
        'http://schema.org/VideoObject',
    ];
}
