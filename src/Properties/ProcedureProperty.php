<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A description of the procedure involved in setting up, using, and/or installing the device.
 */
class ProcedureProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/procedure';
    const PROPERTY_NAME = 'procedure';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalDevice',
    ];
}
