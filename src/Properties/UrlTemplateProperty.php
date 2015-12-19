<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A url template (RFC6570) that will be used to construct the target of the execution of the action.
 */
class UrlTemplateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/urlTemplate';
    const PROPERTY_NAME = 'urlTemplate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/EntryPoint',
    ];
}
