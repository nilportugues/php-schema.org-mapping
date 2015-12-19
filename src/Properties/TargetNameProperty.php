<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The name of a node in an established educational framework.
 */
class TargetNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/targetName';
    const PROPERTY_NAME = 'targetName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AlignmentObject',
    ];
}
