<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The larger organization that this organization is a branch of, if any.
 */
class ParentOrganizationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/parentOrganization';
    const PROPERTY_NAME = 'parentOrganization';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
    ];
}
