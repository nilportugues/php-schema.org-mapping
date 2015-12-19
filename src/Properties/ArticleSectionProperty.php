<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Articles may belong to one or more 'sections' in a magazine or newspaper, such as Sports, Lifestyle, etc.
 */
class ArticleSectionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/articleSection';
    const PROPERTY_NAME = 'articleSection';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Article',
    ];
}
