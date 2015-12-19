<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates the main image on the page.
 */
class PrimaryImageOfPageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/primaryImageOfPage';
    const PROPERTY_NAME = 'primaryImageOfPage';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WebPage',
    ];
}
