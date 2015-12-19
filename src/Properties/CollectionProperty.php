<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of object. The collection target of the action.
 */
class CollectionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/collection';
    const PROPERTY_NAME = 'collection';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/UpdateAction',
    ];
}
