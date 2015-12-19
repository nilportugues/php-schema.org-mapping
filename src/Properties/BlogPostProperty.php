<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A posting that is part of this blog.
 */
class BlogPostProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/blogPost';
    const PROPERTY_NAME = 'blogPost';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Blog',
    ];
}
