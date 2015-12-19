<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The computer programming language.
 */
class ProgrammingLanguageProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/programmingLanguage';
    const PROPERTY_NAME = 'programmingLanguage';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareSourceCode',
    ];
}
