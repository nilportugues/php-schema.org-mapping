<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A category of alignment between the learning resource and the framework node. Recommended values include: 'assesses', 'teaches', 'requires', 'textComplexity', 'readingLevel', 'educationalSubject', and 'educationLevel'.
 */
class AlignmentTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/alignmentType';
    const PROPERTY_NAME = 'alignmentType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AlignmentObject',
    ];
}
