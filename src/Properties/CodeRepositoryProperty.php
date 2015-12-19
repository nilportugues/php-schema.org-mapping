<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Link to the repository where the un-compiled, human readable code and related code is located (SVN, github, CodePlex).
 */
class CodeRepositoryProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/codeRepository';
    const PROPERTY_NAME = 'codeRepository';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareSourceCode',
    ];
}
