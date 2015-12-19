<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The cost per unit of the drug.
 */
class CostPerUnitProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/costPerUnit';
    const PROPERTY_NAME = 'costPerUnit';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DrugCost',
    ];
}
