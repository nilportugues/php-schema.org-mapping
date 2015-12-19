<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The supported content type(s) for an EntryPoint response.
 */
class ContentTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/contentType';
    const PROPERTY_NAME = 'contentType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/EntryPoint',
    ];
}
