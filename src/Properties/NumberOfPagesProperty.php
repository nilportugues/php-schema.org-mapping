<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of pages in the book.
 */
class NumberOfPagesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/numberOfPages';
    const PROPERTY_NAME = 'numberOfPages';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Book',
    ];
}
