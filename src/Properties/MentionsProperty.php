<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates that the CreativeWork contains a reference to, but is not necessarily about a concept.
 */
class MentionsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/mentions';
    const PROPERTY_NAME = 'mentions';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
