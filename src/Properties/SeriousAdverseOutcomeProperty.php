<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A possible serious complication and/or serious side effect of this therapy. Serious adverse outcomes include those that are life-threatening; result in death, disability, or permanent damage; require hospitalization or prolong existing hospitalization; cause congenital anomalies or birth defects; or jeopardize the patient and may require medical or surgical intervention to prevent one of the outcomes in this definition.
 */
class SeriousAdverseOutcomeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/seriousAdverseOutcome';
    const PROPERTY_NAME = 'seriousAdverseOutcome';

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
