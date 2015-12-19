<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The target audience for this permit.
 */
class PermitAudienceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/permitAudience';
    const PROPERTY_NAME = 'permitAudience';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Permit',
    ];
}
