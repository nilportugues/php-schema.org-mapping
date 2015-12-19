<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Languages in which subtitles/captions are available, in IETF BCP 47 standard format.
 */
class SubtitleLanguageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/subtitleLanguage';
    const PROPERTY_NAME = 'subtitleLanguage';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Movie',
        'http://schema.org/ScreeningEvent',
        'http://schema.org/TVEpisode',
    ];
}
