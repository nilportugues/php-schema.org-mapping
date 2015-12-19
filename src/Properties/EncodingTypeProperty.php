<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The supported encoding type(s) for an EntryPoint request.
 */
class EncodingTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/encodingType';
    const PROPERTY_NAME = 'encodingType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/EntryPoint',
    ];
}
