<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Position of the episode within an ordered group of episodes.
 */
class EpisodeNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/episodeNumber';
    const PROPERTY_NAME = 'episodeNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Episode',
    ];
}
