<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A medical guideline related to this entity.
 */
class GuidelineProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/guideline';
    const PROPERTY_NAME = 'guideline';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalEntity',
    ];
}
