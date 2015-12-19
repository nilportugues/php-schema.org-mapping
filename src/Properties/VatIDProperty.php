<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The Value-added Tax ID of the organization or person.
 */
class VatIDProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/vatID';
    const PROPERTY_NAME = 'vatID';

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
