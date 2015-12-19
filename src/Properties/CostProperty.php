<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Cost per unit of the drug, as reported by the source being tagged.
 */
class CostProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/cost';
    const PROPERTY_NAME = 'cost';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
