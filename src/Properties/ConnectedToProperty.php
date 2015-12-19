<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * Other anatomical structures to which this structure is connected.
 */
class ConnectedToProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/connectedTo';
    const PROPERTY_NAME = 'connectedTo';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/AnatomicalStructure',
    ];
}
