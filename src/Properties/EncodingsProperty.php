<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A media object that encodes this CreativeWork.
 */
class EncodingsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/encodings';
    const PROPERTY_NAME = 'encodings';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
