<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An honorific suffix preceding a Person's name such as M.D. /PhD/MSCSW.
 */
class HonorificSuffixProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/honorificSuffix';
    const PROPERTY_NAME = 'honorificSuffix';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
