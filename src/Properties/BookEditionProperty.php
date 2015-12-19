<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The edition of the book.
 */
class BookEditionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/bookEdition';
    const PROPERTY_NAME = 'bookEdition';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Book',
    ];
}
