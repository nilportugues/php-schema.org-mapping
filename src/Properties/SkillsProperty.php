<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Skills required to fulfill this role.
 */
class SkillsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/skills';
    const PROPERTY_NAME = 'skills';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
