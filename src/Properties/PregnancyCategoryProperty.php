<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Pregnancy category of this drug.
 */
class PregnancyCategoryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/pregnancyCategory';
    const PROPERTY_NAME = 'pregnancyCategory';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Drug',
    ];
}
