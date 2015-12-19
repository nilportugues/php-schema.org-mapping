<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The branches that delineate from the nerve bundle.
 */
class BranchProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/branch';
    const PROPERTY_NAME = 'branch';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Nerve',
    ];
}
