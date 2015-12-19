<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A piece of data that represents a particular aspect of a fictional character (skill, power, character points, advantage, disadvantage).
 */
class CharacterAttributeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/characterAttribute';
    const PROPERTY_NAME = 'characterAttribute';

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
