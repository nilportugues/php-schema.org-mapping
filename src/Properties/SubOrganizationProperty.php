<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A relationship between two organizations where the first includes the second, e.g., as a subsidiary. See also: the more specific 'department' property.
 */
class SubOrganizationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/subOrganization';
    const PROPERTY_NAME = 'subOrganization';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
    ];
}
