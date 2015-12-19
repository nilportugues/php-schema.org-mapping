<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The illustrator of the book.
 */
class IllustratorProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/illustrator';
    const PROPERTY_NAME = 'illustrator';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Book',
    ];
}
