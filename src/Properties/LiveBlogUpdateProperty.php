<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An update to the LiveBlog.
 */
class LiveBlogUpdateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/liveBlogUpdate';
    const PROPERTY_NAME = 'liveBlogUpdate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LiveBlogPosting',
    ];
}
