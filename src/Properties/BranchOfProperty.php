<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The larger organization that this local business is a branch of, if any.
 */
class BranchOfProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/branchOf';
    const PROPERTY_NAME = 'branchOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LocalBusiness',
    ];
}
