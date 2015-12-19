<?php

namespace NilPortugues\SchemaOrg\Properties;

use NilPortugues\SchemaOrg\Property;

/**
 * A sub property of object. The candidate subject of this action.
 */
class CandidateProperty extends Property
{
    const SCHEMA_URL = 'http://schema.org/candidate';
    const PROPERTY_NAME = 'candidate';

    /**
     * A list of schemas allowed to use this property.
     *
     * @var array
     */
    protected static $allowedSchemas = [
        'http://schema.org/VoteAction',
    ];
}
