<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A short textual code (also called "store code") that uniquely identifies a place of business. The code is typically assigned by the parentOrganization and used in structured URLs.
 */
class BranchCodeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/branchCode';
    const PROPERTY_NAME = 'branchCode';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/LocalBusiness',
        'http://schema.org/Place',
        'http://schema.org/Store',
    ];
}
