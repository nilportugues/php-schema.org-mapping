<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A preventative therapy used to prevent reoccurrence of the medical condition after an initial episode of the condition.
 */
class SecondaryPreventionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/secondaryPrevention';
    const PROPERTY_NAME = 'secondaryPrevention';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalCondition',
    ];
}
