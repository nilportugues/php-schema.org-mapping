<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * What type of sample: full (compile ready) solution, code snippet, inline code, scripts, template.
 */
class SampleTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/sampleType';
    const PROPERTY_NAME = 'sampleType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareSourceCode',
    ];
}
