<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Identifies input methods that are sufficient to fully control the described resource (WebSchemas wiki lists possible values).
 */
class AccessibilityControlProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/accessibilityControl';
    const PROPERTY_NAME = 'accessibilityControl';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
