<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A contact point for a person or organization.
 */
class ContactPointProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/contactPoint';
    const PROPERTY_NAME = 'contactPoint';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
        'http://schema.org/Person',
    ];
}
