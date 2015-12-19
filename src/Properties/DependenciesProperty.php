<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Prerequisites needed to fulfill steps in article.
 */
class DependenciesProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/dependencies';
    const PROPERTY_NAME = 'dependencies';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/TechArticle',
    ];
}
