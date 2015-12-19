<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The category of cost, such as wholesale, retail, reimbursement cap, etc.
 */
class CostCategoryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/costCategory';
    const PROPERTY_NAME = 'costCategory';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DrugCost',
    ];
}
