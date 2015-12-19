<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The URL at which a reply may be posted to the specified UserComment.
 */
class ReplyToUrlProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/replyToUrl';
    const PROPERTY_NAME = 'replyToUrl';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/UserComments',
    ];
}
