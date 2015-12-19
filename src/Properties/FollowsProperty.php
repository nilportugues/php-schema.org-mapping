<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The most generic uni-directional social relation.
 */
class FollowsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/follows';
    const PROPERTY_NAME = 'follows';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
