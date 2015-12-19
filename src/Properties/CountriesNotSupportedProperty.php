<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Countries for which the application is not supported. You can also provide the two-letter ISO 3166-1 alpha-2 country code.
 */
class CountriesNotSupportedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/countriesNotSupported';
    const PROPERTY_NAME = 'countriesNotSupported';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
