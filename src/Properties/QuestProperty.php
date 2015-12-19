<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The task that a player-controlled character, or group of characters may complete in order to gain a reward.
 */
class QuestProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/quest';
    const PROPERTY_NAME = 'quest';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Game',
        'http://schema.org/VideoGameSeries',
    ];
}
