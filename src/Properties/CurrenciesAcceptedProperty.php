<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The currency accepted (in ISO 4217 currency format).
 */
class CurrenciesAcceptedProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/currenciesAccepted';
    const PROPERTY_NAME = 'currenciesAccepted';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LocalBusiness',
    ];
}
