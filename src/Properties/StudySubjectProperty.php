<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A subject of the study, i.e. one of the medical conditions, therapies, devices, drugs, etc. investigated by the study.
 */
class StudySubjectProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/studySubject';
    const PROPERTY_NAME = 'studySubject';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalStudy',
    ];
}
