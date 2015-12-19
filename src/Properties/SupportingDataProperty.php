<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Supporting data for a SoftwareApplication.
 */
class SupportingDataProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/supportingData';
    const PROPERTY_NAME = 'supportingData';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
