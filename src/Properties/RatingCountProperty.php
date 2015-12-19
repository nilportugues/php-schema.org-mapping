<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The count of total number of ratings.
 */
class RatingCountProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/ratingCount';
    const PROPERTY_NAME = 'ratingCount';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AggregateRating',
    ];
}
