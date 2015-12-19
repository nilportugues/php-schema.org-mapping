<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The neurological pathway that originates the neurons.
 */
class SourcedFromProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sourcedFrom';
    const PROPERTY_NAME = 'sourcedFrom';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Nerve',
    ];
}
