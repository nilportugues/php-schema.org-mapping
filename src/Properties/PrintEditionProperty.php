<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The edition of the print product in which the NewsArticle appears.
 */
class PrintEditionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/printEdition';
    const PROPERTY_NAME = 'printEdition';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/NewsArticle',
    ];
}
