<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The unit in which the drug is measured, e.g. '5 mg tablet'.
 */
class DrugUnitProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/drugUnit';
    const PROPERTY_NAME = 'drugUnit';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DrugCost',
    ];
}
