<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The location in which the study is taking/took place.
 */
class StudyLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/studyLocation';
    const PROPERTY_NAME = 'studyLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalStudy',
    ];
}
