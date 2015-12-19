<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A medical specialty of the provider.
 */
class MedicalSpecialtyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/medicalSpecialty';
    const PROPERTY_NAME = 'medicalSpecialty';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Hospital',
        'http://schema.org/MedicalClinic',
        'http://schema.org/Physician',
    ];
}
