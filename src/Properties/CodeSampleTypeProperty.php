<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * What type of code sample: full (compile ready) solution, code snippet, inline code, scripts, template.
 */
class CodeSampleTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/codeSampleType';
    const PROPERTY_NAME = 'codeSampleType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareSourceCode',
    ];
}
