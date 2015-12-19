<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * The program providing the membership.
 */
class ProgramNameProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/programName';
    const PROPERTY_NAME = 'programName';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/ProgramMembership',
    ];
}
