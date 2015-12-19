<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A director of e.g. tv, radio, movie, video games etc. content. Directors can be associated with individual items or with a series, episode, clip.
 */
class DirectorsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/directors';
    const PROPERTY_NAME = 'directors';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Movie',
        'http://schema.org/VideoObject',
        'http://schema.org/VideoGame',
        'http://schema.org/Episode',
        'http://schema.org/VideoGameSeries',
        'http://schema.org/TVSeries',
        'http://schema.org/RadioSeries',
        'http://schema.org/MovieSeries',
        'http://schema.org/Clip',
    ];
}
