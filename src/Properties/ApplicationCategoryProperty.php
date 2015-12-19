<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Type of software application, e.g. "Game, Multimedia".
 */
class ApplicationCategoryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/applicationCategory';
    const PROPERTY_NAME = 'applicationCategory';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
