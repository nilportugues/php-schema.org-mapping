<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The Organization on whose behalf the creator was working.
 */
class SourceOrganizationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sourceOrganization';
    const PROPERTY_NAME = 'sourceOrganization';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
