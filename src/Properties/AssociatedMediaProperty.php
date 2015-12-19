<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A media object that encodes this CreativeWork. This property is a synonym for encoding.
 */
class AssociatedMediaProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/associatedMedia';
    const PROPERTY_NAME = 'associatedMedia';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
