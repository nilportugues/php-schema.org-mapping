<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * How often one should break from the activity.
 */
class RestPeriodsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/restPeriods';
    const PROPERTY_NAME = 'restPeriods';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ExercisePlan',
    ];
}
