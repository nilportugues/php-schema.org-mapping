<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A preventative therapy used to prevent an initial occurrence of the medical condition, such as vaccination.
 */
class PrimaryPreventionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/primaryPrevention';
    const PROPERTY_NAME = 'primaryPrevention';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCondition',
    ];
}
