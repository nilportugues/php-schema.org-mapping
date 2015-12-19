<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The identifier for the account the payment will be applied to.
 */
class AccountIdProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/accountId';
    const PROPERTY_NAME = 'accountId';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Invoice',
    ];
}
