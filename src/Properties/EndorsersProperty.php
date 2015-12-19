<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * People or organizations that endorse the plan.
 */
class EndorsersProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/endorsers';
    const PROPERTY_NAME = 'endorsers';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Diet',
    ];
}
