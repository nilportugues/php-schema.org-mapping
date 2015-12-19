<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An honorific prefix preceding a Person's name such as Dr/Mrs/Mr.
 */
class HonorificPrefixProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/honorificPrefix';
    const PROPERTY_NAME = 'honorificPrefix';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
