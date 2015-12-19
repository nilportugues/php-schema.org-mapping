<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A member of an Organization or a ProgramMembership. Organizations can be members of organizations; ProgramMembership is typically for individuals.
 */
class MemberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/member';
    const PROPERTY_NAME = 'member';

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
