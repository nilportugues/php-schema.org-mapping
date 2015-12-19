<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The season to which this episode belongs.
 */
class PartOfSeasonProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/partOfSeason';
    const PROPERTY_NAME = 'partOfSeason';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Episode',
        'http://schema.org/Clip',
    ];
}
