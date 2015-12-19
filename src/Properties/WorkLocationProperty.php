<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A contact location for a person's place of work.
 */
class WorkLocationProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/workLocation';
    const PROPERTY_NAME = 'workLocation';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
