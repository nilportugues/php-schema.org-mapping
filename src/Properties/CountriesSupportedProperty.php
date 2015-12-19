<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Countries for which the application is supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
 */
class CountriesSupportedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/countriesSupported';
    const PROPERTY_NAME = 'countriesSupported';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
