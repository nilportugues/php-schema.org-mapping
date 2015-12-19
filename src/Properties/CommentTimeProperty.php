<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The time at which the UserComment was made.
 */
class CommentTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/commentTime';
    const PROPERTY_NAME = 'commentTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/UserComments',
    ];
}
