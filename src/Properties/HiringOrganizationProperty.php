<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Organization offering the job position.
 */
class HiringOrganizationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/hiringOrganization';
    const PROPERTY_NAME = 'hiringOrganization';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/JobPosting',
    ];
}
