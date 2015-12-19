<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The TV series to which this episode or season belongs.
 */
class PartOfTVSeriesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/partOfTVSeries';
    const PROPERTY_NAME = 'partOfTVSeries';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/TVEpisode',
        'http://schema.org/TVSeason',
        'http://schema.org/TVClip',
    ];
}
