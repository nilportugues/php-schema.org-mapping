<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A link to a screenshot image of the app.
 */
class ScreenshotProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/screenshot';
    const PROPERTY_NAME = 'screenshot';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
