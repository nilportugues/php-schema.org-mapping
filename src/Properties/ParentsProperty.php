<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A parents of the person.
 */
class ParentsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/parents';
    const PROPERTY_NAME = 'parents';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
