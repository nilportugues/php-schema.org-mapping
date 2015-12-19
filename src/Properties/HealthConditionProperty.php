<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Expectations for health conditions of target audience.
 */
class HealthConditionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/healthCondition';
    const PROPERTY_NAME = 'healthCondition';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PeopleAudience',
    ];
}
