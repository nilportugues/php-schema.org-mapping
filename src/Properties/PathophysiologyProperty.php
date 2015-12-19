<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Changes in the normal mechanical, physical, and biochemical functions that are associated with this activity or condition.
 */
class PathophysiologyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/pathophysiology';
    const PROPERTY_NAME = 'pathophysiology';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PhysicalActivity',
        'http://schema.org/MedicalCondition',
    ];
}
