<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Target Operating System / Product to which the code applies.  If applies to several versions, just the product name can be used.
 */
class TargetProductProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/targetProduct';
    const PROPERTY_NAME = 'targetProduct';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareSourceCode',
    ];
}
