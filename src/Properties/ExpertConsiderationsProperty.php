<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Medical expert advice related to the plan.
 */
class ExpertConsiderationsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/expertConsiderations';
    const PROPERTY_NAME = 'expertConsiderations';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Diet',
    ];
}
