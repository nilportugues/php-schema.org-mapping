<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The most significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
 */
class SignificantLinksProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/significantLinks';
    const PROPERTY_NAME = 'significantLinks';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WebPage',
    ];
}
