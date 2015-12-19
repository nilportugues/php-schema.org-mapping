<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The Order(s) related to this Invoice. One or more Orders may be combined into a single Invoice.
 */
class ReferencesOrderProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/referencesOrder';
    const PROPERTY_NAME = 'referencesOrder';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Invoice',
    ];
}
