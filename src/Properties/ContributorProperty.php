<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A secondary contributor to the CreativeWork.
 */
class ContributorProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/contributor';
    const PROPERTY_NAME = 'contributor';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
