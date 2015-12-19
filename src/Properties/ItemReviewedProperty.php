<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The item that is being reviewed/rated.
 */
class ItemReviewedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/itemReviewed';
    const PROPERTY_NAME = 'itemReviewed';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AggregateRating',
        'http://schema.org/Review',
    ];
}
