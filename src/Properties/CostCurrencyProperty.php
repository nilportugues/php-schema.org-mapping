<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The currency (in 3-letter ISO 4217 format) of the drug cost.
 */
class CostCurrencyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/costCurrency';
    const PROPERTY_NAME = 'costCurrency';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DrugCost',
    ];
}
