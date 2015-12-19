<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A link to the page containing the comments of the CreativeWork.
 */
class DiscussionUrlProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/discussionUrl';
    const PROPERTY_NAME = 'discussionUrl';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
