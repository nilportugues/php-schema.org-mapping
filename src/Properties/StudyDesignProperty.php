<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Specifics about the observational study design (enumerated).
 */
class StudyDesignProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/studyDesign';
    const PROPERTY_NAME = 'studyDesign';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalObservationalStudy',
    ];
}
