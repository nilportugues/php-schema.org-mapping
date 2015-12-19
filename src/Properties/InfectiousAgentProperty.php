<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The actual infectious agent, such as a specific bacterium.
 */
class InfectiousAgentProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/infectiousAgent';
    const PROPERTY_NAME = 'infectiousAgent';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/InfectiousDisease',
    ];
}
