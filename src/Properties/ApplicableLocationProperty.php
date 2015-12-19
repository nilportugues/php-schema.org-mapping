<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The location in which the status applies.
 */
class ApplicableLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/applicableLocation';
    const PROPERTY_NAME = 'applicableLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/DrugCost',
        'http://schema.org/DrugLegalStatus',
    ];
}
