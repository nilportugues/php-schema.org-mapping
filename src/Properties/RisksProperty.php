<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specific physiologic risks associated to the plan.
 */
class RisksProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/risks';
    const PROPERTY_NAME = 'risks';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Diet',
    ];
}
