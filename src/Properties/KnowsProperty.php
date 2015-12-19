<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The most generic bi-directional social/work relation.
 */
class KnowsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/knows';
    const PROPERTY_NAME = 'knows';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
