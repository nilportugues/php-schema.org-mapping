<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An episode of a tv, radio or game media within a series or season.
 */
class EpisodeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/episode';
    const PROPERTY_NAME = 'episode';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWorkSeason',
        'http://schema.org/RadioSeries',
        'http://schema.org/VideoGameSeries',
        'http://schema.org/TVSeries',
    ];
}
