<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A child of the person.
 */
class ChildrenProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/children';
    const PROPERTY_NAME = 'children';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
