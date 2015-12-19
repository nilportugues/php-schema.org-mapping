<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Date on which this guideline's recommendation was made.
 */
class GuidelineDateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/guidelineDate';
    const PROPERTY_NAME = 'guidelineDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalGuideline',
    ];
}
