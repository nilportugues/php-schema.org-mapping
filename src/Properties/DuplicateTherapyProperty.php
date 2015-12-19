<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A therapy that duplicates or overlaps this one.
 */
class DuplicateTherapyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/duplicateTherapy';
    const PROPERTY_NAME = 'duplicateTherapy';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalTherapy',
    ];
}
