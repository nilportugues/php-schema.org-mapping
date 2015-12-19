<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * If applicable, a medical specialty in which this entity is relevant.
 */
class RelevantSpecialtyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/relevantSpecialty';
    const PROPERTY_NAME = 'relevantSpecialty';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalEntity',
    ];
}
