<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A member of this organization.
 */
class MembersProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/members';
    const PROPERTY_NAME = 'members';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/ProgramMembership',
    ];
}
