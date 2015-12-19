<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Nationality of the person.
 */
class NationalityProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/nationality';
    const PROPERTY_NAME = 'nationality';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
