<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Proprietary name given to the diet plan, typically by its originator or creator.
 */
class ProprietaryNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/proprietaryName';
    const PROPERTY_NAME = 'proprietaryName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/Diet',
    ];
}
