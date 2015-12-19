<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The organization (airline, travelers' club, etc.) the membership is made with.
 */
class HostingOrganizationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/hostingOrganization';
    const PROPERTY_NAME = 'hostingOrganization';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ProgramMembership',
    ];
}
