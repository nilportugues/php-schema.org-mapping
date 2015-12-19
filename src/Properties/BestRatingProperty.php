<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The highest value allowed in this rating system. If bestRating is omitted, 5 is assumed.
 */
class BestRatingProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/bestRating';
    const PROPERTY_NAME = 'bestRating';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Rating',
    ];
}
