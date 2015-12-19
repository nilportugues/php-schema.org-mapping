<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A contact point for a person or organization.
 */
class ContactPointsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/contactPoints';
    const PROPERTY_NAME = 'contactPoints';

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
