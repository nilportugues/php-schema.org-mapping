<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Processor architecture required to run the application (e.g. IA64).
 */
class ProcessorRequirementsProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/processorRequirements';
    const PROPERTY_NAME = 'processorRequirements';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/SoftwareApplication',
    ];
}
