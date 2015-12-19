<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The party holding the legal copyright to the CreativeWork.
 */
class CopyrightHolderProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/copyrightHolder';
    const PROPERTY_NAME = 'copyrightHolder';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
