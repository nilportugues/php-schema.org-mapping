<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Comments, typically from users.
 */
class CommentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/comment';
    const PROPERTY_NAME = 'comment';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/RsvpAction',
    ];
}
