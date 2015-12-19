<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An alignment to an established educational framework.
 */
class EducationalAlignmentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/educationalAlignment';
    const PROPERTY_NAME = 'educationalAlignment';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
