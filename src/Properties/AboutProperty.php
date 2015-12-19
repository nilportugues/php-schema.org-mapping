<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The subject matter of the content.
 */
class AboutProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/about';
    const PROPERTY_NAME = 'about';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
        'http://schema.org/CommunicateAction',
    ];
}
