<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Descriptive information establishing the overarching theory/philosophy of the plan. May include the rationale for the name, the population where the plan first came to prominence, etc.
 */
class OverviewProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/overview';
    const PROPERTY_NAME = 'overview';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Diet',
    ];
}
