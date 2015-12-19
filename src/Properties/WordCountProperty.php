<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of words in the text of the Article.
 */
class WordCountProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/wordCount';
    const PROPERTY_NAME = 'wordCount';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Article',
    ];
}
