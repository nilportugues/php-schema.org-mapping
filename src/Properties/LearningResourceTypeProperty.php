<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The predominant type or kind characterizing the learning resource. For example, 'presentation', 'handout'.
 */
class LearningResourceTypeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/learningResourceType';
    const PROPERTY_NAME = 'learningResourceType';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/CreativeWork',
    ];
}
