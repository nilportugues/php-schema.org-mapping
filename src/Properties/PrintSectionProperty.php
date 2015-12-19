<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * If this NewsArticle appears in print, this field indicates the print section in which the article appeared.
 */
class PrintSectionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/printSection';
    const PROPERTY_NAME = 'printSection';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NewsArticle',
    ];
}
