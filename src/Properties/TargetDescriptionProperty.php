<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The description of a node in an established educational framework.
 */
class TargetDescriptionProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/targetDescription';
    const PROPERTY_NAME = 'targetDescription';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AlignmentObject',
    ];
}
