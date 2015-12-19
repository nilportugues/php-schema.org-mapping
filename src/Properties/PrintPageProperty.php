<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * If this NewsArticle appears in print, this field indicates the name of the page on which the article is found. Please note that this field is intended for the exact page name (e.g. A5, B18).
 */
class PrintPageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/printPage';
    const PROPERTY_NAME = 'printPage';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NewsArticle',
    ];
}
