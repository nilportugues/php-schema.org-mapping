<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A colleague of the person.
 */
class ColleagueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/colleague';
    const PROPERTY_NAME = 'colleague';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
