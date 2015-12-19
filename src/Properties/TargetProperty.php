<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates a target EntryPoint for an Action.
 */
class TargetProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/target';
    const PROPERTY_NAME = 'target';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Action',
    ];
}
