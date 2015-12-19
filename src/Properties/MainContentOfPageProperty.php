<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates if this web page element is the main subject of the page.
 */
class MainContentOfPageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/mainContentOfPage';
    const PROPERTY_NAME = 'mainContentOfPage';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WebPage',
    ];
}
