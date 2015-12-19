<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specifies the CreativeWork associated with the UserComment.
 */
class DiscussesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/discusses';
    const PROPERTY_NAME = 'discusses';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/UserComments',
    ];
}
