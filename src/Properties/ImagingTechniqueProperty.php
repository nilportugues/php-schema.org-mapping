<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Imaging technique used.
 */
class ImagingTechniqueProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/imagingTechnique';
    const PROPERTY_NAME = 'imagingTechnique';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ImagingTest',
    ];
}
