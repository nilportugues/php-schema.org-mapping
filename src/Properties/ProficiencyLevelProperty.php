<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Proficiency needed for this content; expected values: 'Beginner', 'Expert'.
 */
class ProficiencyLevelProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/proficiencyLevel';
    const PROPERTY_NAME = 'proficiencyLevel';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/TechArticle',
    ];
}
