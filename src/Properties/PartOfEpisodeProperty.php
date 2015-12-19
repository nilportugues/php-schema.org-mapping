<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The episode to which this clip belongs.
 */
class PartOfEpisodeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/partOfEpisode';
    const PROPERTY_NAME = 'partOfEpisode';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Clip',
    ];
}