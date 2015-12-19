<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An additional name for a Person, can be used for a middle name.
 */
class AdditionalNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/additionalName';
    const PROPERTY_NAME = 'additionalName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
