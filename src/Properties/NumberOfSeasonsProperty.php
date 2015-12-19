<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of seasons in this series.
 */
class NumberOfSeasonsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numberOfSeasons';
    const PROPERTY_NAME = 'numberOfSeasons';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/TVSeries',
        'http://schema.org/RadioSeries',
        'http://schema.org/VideoGameSeries',
    ];
}
