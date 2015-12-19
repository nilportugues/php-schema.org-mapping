<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates that the resource is compatible with the referenced accessibility API (WebSchemas wiki lists possible values).
 */
class AccessibilityAPIProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/accessibilityAPI';
    const PROPERTY_NAME = 'accessibilityAPI';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
