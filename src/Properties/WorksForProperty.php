<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Organizations that the person works for.
 */
class WorksForProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/worksFor';
    const PROPERTY_NAME = 'worksFor';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
