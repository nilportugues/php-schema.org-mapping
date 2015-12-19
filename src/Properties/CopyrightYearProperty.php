<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The year during which the claimed copyright for the CreativeWork was first asserted.
 */
class CopyrightYearProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/copyrightYear';
    const PROPERTY_NAME = 'copyrightYear';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
