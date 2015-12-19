<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The number or other unique designator assigned to a Report by the publishing organization.
 */
class ReportNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/reportNumber';
    const PROPERTY_NAME = 'reportNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Report',
    ];
}
