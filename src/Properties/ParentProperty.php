<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A parent of this person.
 */
class ParentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/parent';
    const PROPERTY_NAME = 'parent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
