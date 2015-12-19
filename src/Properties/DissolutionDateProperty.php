<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The date that this organization was dissolved.
 */
class DissolutionDateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dissolutionDate';
    const PROPERTY_NAME = 'dissolutionDate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
    ];
}
