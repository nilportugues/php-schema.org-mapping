<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The basic containment relation between a place and one that contains it.
 */
class ContainedInProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/containedIn';
    const PROPERTY_NAME = 'containedIn';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Place',
    ];
}
