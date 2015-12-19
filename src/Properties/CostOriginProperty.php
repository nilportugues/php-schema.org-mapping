<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Additional details to capture the origin of the cost data. For example, 'Medicare Part B'.
 */
class CostOriginProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/costOrigin';
    const PROPERTY_NAME = 'costOrigin';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DrugCost',
    ];
}
