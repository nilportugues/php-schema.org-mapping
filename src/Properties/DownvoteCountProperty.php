<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number of downvotes this question, answer or comment has received from the community.
 */
class DownvoteCountProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/downvoteCount';
    const PROPERTY_NAME = 'downvoteCount';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Question',
        'http://schema.org/Comment',
    ];
}
