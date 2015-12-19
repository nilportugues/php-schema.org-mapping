<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The text of the UserComment.
 */
class CommentTextProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/commentText';
    const PROPERTY_NAME = 'commentText';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/UserComments',
    ];
}
