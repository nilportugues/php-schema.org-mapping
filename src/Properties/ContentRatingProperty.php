<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Official rating of a piece of content&#x2014;for example,'MPAA PG-13'.
 */
class ContentRatingProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/contentRating';
    const PROPERTY_NAME = 'contentRating';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
