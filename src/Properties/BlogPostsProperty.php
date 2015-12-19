<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The postings that are part of this blog.
 */
class BlogPostsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/blogPosts';
    const PROPERTY_NAME = 'blogPosts';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Blog',
    ];
}
