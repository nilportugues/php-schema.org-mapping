<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Content features of the resource, such as accessible media, alternatives and supported enhancements for accessibility (WebSchemas wiki lists possible values).
 */
class AccessibilityFeatureProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/accessibilityFeature';
    const PROPERTY_NAME = 'accessibilityFeature';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
