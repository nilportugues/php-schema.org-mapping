<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates whether this game is multi-player, co-op or single-player.  The game can be marked as multi-player, co-op and single-player at the same time.
 */
class PlayModeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/playMode';
    const PROPERTY_NAME = 'playMode';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/VideoGame',
        'http://schema.org/VideoGameSeries',
    ];
}
