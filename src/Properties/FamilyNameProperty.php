<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Family name. In the U.S., the last name of an Person. This can be used along with givenName instead of the name property.
 */
class FamilyNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/familyName';
    const PROPERTY_NAME = 'familyName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
