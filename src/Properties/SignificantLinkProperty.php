<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * One of the more significant URLs on the page. Typically, these are the non-navigation links that are clicked on the most.
 */
class SignificantLinkProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/significantLink';
    const PROPERTY_NAME = 'significantLink';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WebPage',
    ];
}
