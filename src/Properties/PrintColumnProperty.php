<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of the column in which the NewsArticle appears in the print edition.
 */
class PrintColumnProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/printColumn';
    const PROPERTY_NAME = 'printColumn';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NewsArticle',
    ];
}
