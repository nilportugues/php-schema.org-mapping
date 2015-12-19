<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Given name. In the U.S., the first name of a Person. This can be used along with familyName instead of the name property.
 */
class GivenNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/givenName';
    const PROPERTY_NAME = 'givenName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
