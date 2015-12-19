<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A contraindication for this therapy.
 */
class ContraindicationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/contraindication';
    const PROPERTY_NAME = 'contraindication';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalTherapy',
        'http://schema.org/MedicalDevice',
    ];
}
