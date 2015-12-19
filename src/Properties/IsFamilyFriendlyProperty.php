<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates whether this content is family friendly.
 */
class IsFamilyFriendlyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/isFamilyFriendly';
    const PROPERTY_NAME = 'isFamilyFriendly';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
