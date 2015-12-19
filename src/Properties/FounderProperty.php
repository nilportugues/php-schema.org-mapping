<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A person who founded this organization.
 */
class FounderProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/founder';
    const PROPERTY_NAME = 'founder';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
    ];
}
