<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A medical study or trial related to this entity.
 */
class StudyProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/study';
    const PROPERTY_NAME = 'study';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalEntity',
    ];
}
