<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The rating for the content.
 */
class RatingValueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/ratingValue';
    const PROPERTY_NAME = 'ratingValue';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Rating',
    ];
}
