<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The post office box number for PO box addresses.
 */
class PostOfficeBoxNumberProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/postOfficeBoxNumber';
    const PROPERTY_NAME = 'postOfficeBoxNumber';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/PostalAddress',
    ];
}
