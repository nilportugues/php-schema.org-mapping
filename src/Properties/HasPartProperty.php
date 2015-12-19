<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Indicates a CreativeWork that is (in some sense) a part of this CreativeWork.
 */
class HasPartProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/hasPart';
    const PROPERTY_NAME = 'hasPart';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
