<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The actual body of the article.
 */
class ArticleBodyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/articleBody';
    const PROPERTY_NAME = 'articleBody';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Article',
    ];
}
