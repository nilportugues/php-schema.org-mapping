<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A season that is part of the media series.
 */
class ContainsSeasonProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/containsSeason';
    const PROPERTY_NAME = 'containsSeason';

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
