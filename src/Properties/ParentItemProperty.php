<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The parent of a question, answer or item in general.
 */
class ParentItemProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/parentItem';
    const PROPERTY_NAME = 'parentItem';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Comment',
    ];
}
