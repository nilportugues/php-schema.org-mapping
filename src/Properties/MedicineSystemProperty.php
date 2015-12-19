<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The system of medicine that includes this MedicalEntity, for example 'evidence-based', 'homeopathic', 'chiropractic', etc.
 */
class MedicineSystemProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/medicineSystem';
    const PROPERTY_NAME = 'medicineSystem';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalEntity',
    ];
}
