<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Quantitative measure of the physiologic output of the exercise; also referred to as energy expenditure.
 */
class WorkloadProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/workload';
    const PROPERTY_NAME = 'workload';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExercisePlan',
    ];
}
