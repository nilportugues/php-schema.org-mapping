<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A review of the item.
 */
class ReviewProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/review';
    const PROPERTY_NAME = 'review';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/Event',
        'http://schema.org/Brand',
        'http://schema.org/Service',
        'http://schema.org/Organization',
        'http://schema.org/Place',
        'http://schema.org/Offer',
        'http://schema.org/Product',
    ];
}
