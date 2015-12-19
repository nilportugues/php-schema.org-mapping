<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Review of the item.
 */
class ReviewsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/reviews';
    const PROPERTY_NAME = 'reviews';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/Organization',
        'http://schema.org/Place',
        'http://schema.org/Offer',
        'http://schema.org/Product',
    ];
}