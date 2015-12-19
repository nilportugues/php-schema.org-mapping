<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A description of the postoperative procedures, care, and/or followups for this device.
 */
class PostOpProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/postOp';
    const PROPERTY_NAME = 'postOp';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalDevice',
    ];
}
