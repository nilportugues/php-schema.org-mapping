<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of episodes in this season or series.
 */
class NumberOfEpisodesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numberOfEpisodes';
    const PROPERTY_NAME = 'numberOfEpisodes';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWorkSeason',
        'http://schema.org/TVSeries',
        'http://schema.org/VideoGameSeries',
        'http://schema.org/RadioSeries',
    ];
}
