<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The basic containment relation between a place and one that contains it.
 */
class ContainedInPlaceProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/containedInPlace';
    const PROPERTY_NAME = 'containedInPlace';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Place',
    ];
}
