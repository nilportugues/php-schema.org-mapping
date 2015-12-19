<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A unique identifier for the membership.
 */
class MembershipNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/membershipNumber';
    const PROPERTY_NAME = 'membershipNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ProgramMembership',
    ];
}
