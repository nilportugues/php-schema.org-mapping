<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specifies the Person that is legally accountable for the CreativeWork.
 */
class AccountablePersonProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/accountablePerson';
    const PROPERTY_NAME = 'accountablePerson';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
