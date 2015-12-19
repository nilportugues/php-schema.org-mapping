<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The most generic familial relation.
 */
class RelatedToProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/relatedTo';
    const PROPERTY_NAME = 'relatedTo';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Person',
    ];
}
