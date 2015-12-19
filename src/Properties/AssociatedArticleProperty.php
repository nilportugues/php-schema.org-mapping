<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A NewsArticle associated with the Media Object.
 */
class AssociatedArticleProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/associatedArticle';
    const PROPERTY_NAME = 'associatedArticle';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MediaObject',
    ];
}
