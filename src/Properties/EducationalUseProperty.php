<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The purpose of a work in the context of education; for example, 'assignment', 'group work'.
 */
class EducationalUseProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/educationalUse';
    const PROPERTY_NAME = 'educationalUse';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
