<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The ISBN of the book.
 */
class IsbnProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/isbn';
    const PROPERTY_NAME = 'isbn';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Book',
    ];
}
