<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The lowest value allowed in this rating system. If worstRating is omitted, 1 is assumed.
 */
class WorstRatingProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/worstRating';
    const PROPERTY_NAME = 'worstRating';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Rating',
    ];
}
