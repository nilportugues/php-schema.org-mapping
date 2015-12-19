<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A goal towards an action is taken. Can be concrete or abstract.
 */
class PurposeProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/purpose';
    const PROPERTY_NAME = 'purpose';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/MedicalDevice',
        'http://schema.org/AllocateAction',
        'http://schema.org/PayAction',
    ];
}
