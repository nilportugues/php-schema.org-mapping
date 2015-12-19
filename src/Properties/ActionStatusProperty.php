<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates the current disposition of the Action.
 */
class ActionStatusProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/actionStatus';
    const PROPERTY_NAME = 'actionStatus';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Action',
    ];
}
