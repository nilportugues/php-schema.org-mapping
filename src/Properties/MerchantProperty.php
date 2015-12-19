<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * 'merchant' is an out-dated term for 'seller'.
 */
class MerchantProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/merchant';
    const PROPERTY_NAME = 'merchant';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Order',
    ];
}
