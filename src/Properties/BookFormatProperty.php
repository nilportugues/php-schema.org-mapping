<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The format of the book.
 */
class BookFormatProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/bookFormat';
    const PROPERTY_NAME = 'bookFormat';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Book',
    ];
}
