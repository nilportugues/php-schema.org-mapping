<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Strength of evidence of the data used to formulate the guideline (enumerated).
 */
class EvidenceLevelProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/evidenceLevel';
    const PROPERTY_NAME = 'evidenceLevel';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalGuideline',
    ];
}
