<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The scope of the warranty promise.
 */
class WarrantyScopeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/warrantyScope';
    const PROPERTY_NAME = 'warrantyScope';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/WarrantyPromise',
    ];
}
