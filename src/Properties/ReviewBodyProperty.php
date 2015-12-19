<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The actual body of the review.
 */
class ReviewBodyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/reviewBody';
    const PROPERTY_NAME = 'reviewBody';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Review',
    ];
}
