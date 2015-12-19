<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The neurological pathway extension that involves muscle control.
 */
class NerveMotorProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/nerveMotor';
    const PROPERTY_NAME = 'nerveMotor';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Nerve',
    ];
}
