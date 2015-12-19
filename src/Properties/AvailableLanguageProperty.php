<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A language someone may use with the item.
 */
class AvailableLanguageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/availableLanguage';
    const PROPERTY_NAME = 'availableLanguage';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ContactPoint',
        'http://schema.org/ServiceChannel',
    ];
}
