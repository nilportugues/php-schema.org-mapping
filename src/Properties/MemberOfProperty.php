<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An Organization (or ProgramMembership) to which this Person or Organization belongs.
 */
class MemberOfProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/memberOf';
    const PROPERTY_NAME = 'memberOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
        'http://schema.org/Organization',
    ];
}
