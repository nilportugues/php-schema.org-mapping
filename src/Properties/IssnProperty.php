<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The International Standard Serial Number (ISSN) that identifies this periodical. You can repeat this property to (for example) identify different formats of this periodical.
 */
class IssnProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/issn';
    const PROPERTY_NAME = 'issn';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Periodical',
    ];
}
