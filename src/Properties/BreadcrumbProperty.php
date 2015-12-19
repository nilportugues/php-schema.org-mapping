<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A set of links that can help a user understand and navigate a website hierarchy.
 */
class BreadcrumbProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/breadcrumb';
    const PROPERTY_NAME = 'breadcrumb';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WebPage',
    ];
}
