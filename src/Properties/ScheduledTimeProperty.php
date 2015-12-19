<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The time the object is scheduled to.
 */
class ScheduledTimeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/scheduledTime';
    const PROPERTY_NAME = 'scheduledTime';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PlanAction',
    ];
}
