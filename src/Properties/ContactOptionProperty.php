<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * An option available on this contact point (e.g. a toll-free number or support for hearing-impaired callers).
 */
class ContactOptionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/contactOption';
    const PROPERTY_NAME = 'contactOption';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ContactPoint',
    ];
}
