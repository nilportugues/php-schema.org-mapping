<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An organization that the person is an alumni of.
 */
class AlumniOfProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/alumniOf';
    const PROPERTY_NAME = 'alumniOf';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
