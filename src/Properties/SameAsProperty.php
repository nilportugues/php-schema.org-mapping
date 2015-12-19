<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * URL of a reference Web page that unambiguously indicates the item's identity. E.g. the URL of the item's Wikipedia page, Freebase page, or official website.
 */
class SameAsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sameAs';
    const PROPERTY_NAME = 'sameAs';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Thing',
    ];
}
