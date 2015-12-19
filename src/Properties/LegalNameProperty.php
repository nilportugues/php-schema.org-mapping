<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The official name of the organization, e.g. the registered company name.
 */
class LegalNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/legalName';
    const PROPERTY_NAME = 'legalName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Organization',
    ];
}
