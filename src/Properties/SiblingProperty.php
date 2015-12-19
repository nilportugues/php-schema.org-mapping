<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sibling of the person.
 */
class SiblingProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sibling';
    const PROPERTY_NAME = 'sibling';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
