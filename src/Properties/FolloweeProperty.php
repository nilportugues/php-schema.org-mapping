<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of object. The person or organization being followed.
 */
class FolloweeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/followee';
    const PROPERTY_NAME = 'followee';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/FollowAction',
    ];
}
